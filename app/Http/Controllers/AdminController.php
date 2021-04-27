<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Services\AdminServices;

class AdminController extends Controller
{
    public function __construct(
        AdminServices $adminServices
    ) {
        $this->adminServices = $adminServices;
    }

    public function manageTransferMoney(Request $request)
    {
        $transferMoneyHistories = $this->adminServices->getListTransferMoney();

        return view('admin.manager.transfer_money', [ 'transferMoneyHistories' => $transferMoneyHistories ]);
    }

    public function receivedMoney(Request $request)
    {
        $transferMoneyHistories = $this->adminServices->receivedMoney($request->transferId);
        return 1;
    }
    

}
