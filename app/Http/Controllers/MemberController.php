<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Services\MemberServices;

class MemberController extends Controller
{
    public function __construct(
        MemberServices $memberServices
    ) {
        $this->memberServices = $memberServices;
    }

    public function orderHistory(Request $request)
    {
        $orderHistory = $this->memberServices->orderHistory();
        $postHistories = $this->memberServices->getPostHistory();

        return view('self.order.history', [ 'orderHistory' => $orderHistory, 'postHistories' => $postHistories ]);
    }

    public function updateTransactionStatus(Request $request)
    {
        $postHistories = $this->memberServices->processUpdateTransactionStatus($request->transactionId, $request->nextStatus, $request->moneyCod, $request->transactionCode, $request->orderCode);
        return 1;
    }

    public function transferMoney(Request $request)
    {
        if (!$request->transactionData || !$request->money || !$request->file('evidence')) return false;
        $transactionData = json_decode($request->transactionData)->transactionData;
        $evidence = $request->file('evidence');
        $money = $request->money;
        $filePath = uploadEvidence($evidence);
        // $filePath = '';
        $postHistories = $this->memberServices->processUpdateTransferMoneyHistory($transactionData, $money, $filePath);
    }

    public function transferMoneyHistory(Request $request)
    {
        $transferHistories = $this->memberServices->getSelfTransferMoneyHistory();
        return view('self.transfer.history', [ 'transferMoneyHistories' => $transferHistories ]);
    }

    public function viewOrderByTransferId(Request $request)
    {
        $orders = $this->memberServices->getOrderByTransferId($request->transferId);
        return $orders;
    }

    public function coinHistory(Request $request)
    {
        $coinHistories = $this->memberServices->getCoinHistories();
        return view('self.coin.coin', ['coinHistories' => $coinHistories]);
    }

    public function addCoin(Request $request)
    {
        $validated = $request->validate([
            'coin' => 'required|integer|min:5',
            'evidence' => 'required'
        ]);

        if (!is_array($validated) && $validated->fails()) {
            return Response::json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()

            ), 400); // 400 being the HTTP code for an invalid request.
        }
        $evidence = $request->file('evidence');
        $coin = $request->coin;
        $filePath = uploadEvidence($evidence);
        $coin = $this->memberServices->processAddCoin($coin, $filePath);
        return 1;
    }

    public function confirmAddCoin(Request $request)
    {
        $coin = $this->memberServices->processConfirmAddCoin($request->coinHistoryId);
        return 1;
    }
}
