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

}
