<?php
namespace App\Services;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MemberServices
{
    public function orderHistory()
    {
        $orderHistories = DB::table('transactions_order as trans')
            ->select('trans.*', 'u.name as member', 'author.name as authorname', 'p.content', 'p.image', 'shopee_nick_list.link_shopee')
            ->leftJoin('users as u', 'u.id', '=', 'trans.user_id')
            ->leftJoin('posts as p', 'p.id', '=', 'trans.post_id')
            ->leftJoin('users as author', 'author.id', '=', 'p.user_id')
            ->leftJoin('shopee_nick_list as shopee_nick_list', 'shopee_nick_list.id', '=', 'trans.shopee_link')
            ->where('trans.user_id', Auth::id())
            ->orderBy('trans.created_at', 'desc')
            ->paginate(100);
        return $orderHistories;
    }
    public function getPostHistory()
    {
        $postHistories = DB::table('transactions_order as trans')
            ->select('trans.*', 'u.name as member', 'author.name as authorname',
                    'p.content', 'p.id as basePostId', 'p.image', 'p.coin_pay', 'p.status', 'p.number_order',
                    'p.created_at as post_created', 'p.number_order_remaining', 'p.is_apply_freeship',
                    'p.requirement_payment', 'p.title', 'shopee_nick_list.link_shopee')
            ->leftJoin('users as u', 'u.id', '=', 'trans.user_id')
            ->rightJoin('posts as p', 'p.id', '=', 'trans.post_id')
            ->leftJoin('users as author', 'author.id', '=', 'p.user_id')
            ->leftJoin('shopee_nick_list as shopee_nick_list', 'shopee_nick_list.id', '=', 'trans.shopee_link')
            ->where('p.user_id', Auth::id())
            ->orderBy('trans.created_at', 'desc')
            ->paginate(100);

        return $postHistories;
    }

    public function processUpdateTransactionStatus($transactionId, $nextStatus, $money = null, $transactionCode = null, $orderCode = null)
    {
        DB::beginTransaction();

        try {
            switch($nextStatus) {
                case 1:
                    $this->processConfirmOrder($transactionId, $money, $transactionCode, $orderCode);
                    $this->processAddCoinToMember($transactionId);
                    break;
                case 3:
                    $this->processSuccessOrder($transactionId);
                    break;
                default:
                    $this->processCancelOrder($transactionId);
            }
            DB::commit();
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            // something went wrong
        }
        
    }

    public function processConfirmOrder($transactionId, $money, $transactionCode, $orderCode)
    {
        /* Set transaction_status = 1 */
        DB::table('transactions_order')->where('id', $transactionId)->update(
            ['transaction_status' => 1,
             'money_cod' => $money,
             'transaction_code' => $transactionCode,
             'order_code' => $orderCode,
             'updated_at' => Carbon::now()
            ]);
        return 1;
    }

    public function processAddCoinToMember($transactionId)
    {
        $transaction = DB::table('transactions_order')->where('id', $transactionId)->first();
        $coinPay = DB::table('posts')->where('id', $transaction->post_id)->first()->coin_pay;

        $point = DB::table('users')->where('id', $transaction->user_id)->first()->point;
        DB::table('users')->where('id', $transaction->user_id)->update(['point' => $point + $coinPay]);

        return 1;
    }

    public function processUpdateTransferMoneyHistory($transactionData, $money, $evidence)
    {
        DB::beginTransaction();

        try {
            $transferMoneyHistoryId = DB::table('transfer_money_history')
                ->insertGetId([  'user_id' => Auth::id(),
                                'money' => $money,
                                'evidence' => $evidence,
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now()]);
            $listTransactionId = array_column($transactionData, 'transactionId');
            DB::table('transactions_order')->whereIn('id', $listTransactionId)
                    ->update(['transfer_money_history_id' => $transferMoneyHistoryId, 'transaction_status' => 2]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
        
        return;
    }

    public function processSuccessOrder($transactionId)
    {

    }

    public function processCancelOrder($transactionId)
    {
        $currentTransactionOrder = DB::table('transactions_order')
        ->select('transactions_order.*', 'p.coin_pay')
        ->leftJoin('posts as p', 'p.id', '=', 'transactions_order.post_id')
        ->where('transactions_order.id', $transactionId)
        ->first();

        DB::table('transactions_order')->where('id', $transactionId)->update(
            ['transaction_status' => 4,
             'updated_at' => Carbon::now()
            ]);
        if ($currentTransactionOrder->transaction_status !== 0) {
            // trừ coin của người dat
            $coin = $currentTransactionOrder->coin_pay;
            $member = DB::table('users')->where('id', $currentTransactionOrder->user_id)->first();
            $coinUpdate = $member->point - $coin;
            DB::table('users')->where('id', $currentTransactionOrder->user_id)->update(
            ['point' => $coinUpdate,
             'updated_at' => Carbon::now()
            ]);
        }
        return;
    }
}