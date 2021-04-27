<?php
namespace App\Services;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AdminServices
{
    public function getListTransferMoney()
    {
        if (Auth::user()->is_admin) {
            $transferMoneyHistories = DB::table('transfer_money_history as trans')
                ->select('trans.*', 'u.name as member')
                ->leftJoin('users as u', 'u.id', '=', 'trans.user_id')
                ->orderBy('trans.created_at', 'desc')
                ->paginate(100);
            return $transferMoneyHistories;
        }
        return [];
    }

    public function receivedMoney($transferId)
    {
        if (Auth::user()->is_admin) {
            DB::beginTransaction();

            try {
                DB::table('transfer_money_history')->where('id', $transferId)
                        ->update(['is_received_money' => 1]);
                DB::commit();
            } catch (\Exception $e) {
                DB::rollback();
            }

            return;
        }
        return ;
    }
}