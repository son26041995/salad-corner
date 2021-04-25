<form method="post">
    <div id="modal_transfer_money" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Chuyển tiền COD cho admin</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
                <label for="table-show-transaction-selected">Danh sách đã chọn / Số tiền cần chuyển khoản: <span id="total-money"></span></label>
                <table id="table-show-transaction-selected" class="table table-bordered">
                    <thead class="thead-light ">
                        <tr>
                          <th rowspan="2" scope="col">Mã vận đơn</th>
                          <th rowspan="2" scope="col">Số tiền COD cần chuyển khoản</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <div class="form-group">
                <label for="table-list-transaction">Danh sách đơn chưa chuyển khoản</label>
                <table style="overflow: scroll;" class="table table-bordered" id="table-list-transaction">
                    <thead class="thead-light ">
                      <tr>

                        <th rowspan="2" scope="col">#</th>
                        <th rowspan="2" scope="col">Chủ bài đăng</th>
                        <th rowspan="2" scope="col">Nội dung bài đăng</th>
                        <th rowspan="2" scope="col">Trạng thái </th>
                        <th rowspan="2" scope="col">Ngày tạo đơn</th>
                        <th colspan="8" scope="col">Danh sách người đặt</th>
                      </tr>
                      <tr>
                          <th scope="col">Người đặt</th>
                          <th scope="col">Trạng thái đơn</th>
                          <th scope="col">Tiền đơn</th>
                          <th scope="col">Mã vận đơn</th>
                          <th scope="col">Mã đơn hàng</th>
                          <th scope="col">Nick đặt</th>
                          <th scope="col">Ngày tạo</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $k = 0; $postHistoriesNotTransfers =  getTransactionNotTransfer('basePostId', $postHistories); ?>
                        @foreach ($postHistoriesNotTransfers as $basePostId => $listTransactions )
                            <?php $numberRowspan =  count($listTransactions); ?>
                            <tr
                                data-transactionid="{{$listTransactions[0]->id}}"
                                data-transactionstatus="{{ $listTransactions[0]->transaction_status }}"
                                data-transactioncode="{{ $listTransactions[0]->transaction_code }}"
                                data-money="{{ $listTransactions[0]->money_cod }}"
                            >
                                
                                <th rowspan="{{ $numberRowspan }}" scope="row">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input selectTransaction" id="customCheck{{$k}}">
                                        <label class="custom-control-label" for="customCheck{{$k}}">{{ ++$k }}</label>
                                    </div>
                                </th>
                                <td rowspan="{{ $numberRowspan }}">{{ $listTransactions[0]->authorname }}</td>
                                <td rowspan="{{ $numberRowspan }}">{{ $listTransactions[0]->content }}</td>
                                <td rowspan="{{ $numberRowspan }}">{{ $listTransactions[0]->status }}</td>
                                <td rowspan="{{ $numberRowspan }}">{{ $listTransactions[0]->post_created }}</td>
                                <td>{{ $listTransactions[0]->member }}</td>
                                <td>{{ getTransactionOrderStatus($listTransactions[0]->transaction_status) }}</td>
                                <td>{{ $listTransactions[0]->money_cod }}</td>
                                <td>{{ $listTransactions[0]->transaction_code }}</td>
                                <td>{{ $listTransactions[0]->order_code }}</td>
                                <td>{{ $listTransactions[0]->link_shopee }}</td>
                                <td>{{ $listTransactions[0]->created_at }}</td>
                            </tr>
                            @foreach ($listTransactions as $num => $transaction )
                                @if($num !== 0)
                                    <tr data-transactionid="{{ $transaction->id }}"
                                        data-transactionstatus="{{ $transaction->transaction_status }}"
                                        data-transactioncode="{{ $transaction->transaction_code }}"
                                        data-money="{{ $transaction->money_cod }}"
                                        >
                                        <td>{{ $transaction->member }}</td>
                                        <td>{{ getTransactionOrderStatus($transaction->transaction_status) }}</td>
                                        <td>{{ $transaction->money_cod }}</td>
                                        <td>{{ $transaction->transaction_code }}</td>
                                        <td>{{ $transaction->order_code }}</td>
                                        <td>{{ $transaction->link_shopee }}</td>
                                        <td>{{ $transaction->created_at }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        @endforeach
                      
                      
                    </tbody>
                  </table>
            </div>
          </div>
          <div class="modal-footer">
            <button id="btn_click_transfer" type="button" class="btn btn-primary">Xác nhận</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          </div>
        </div>
      </div>
    </div>
</form>