<table class="table table-bordered">
    <thead class="thead-light ">
      <tr>
        <th rowspan="2" scope="col">#</th>
        <th rowspan="2" scope="col">Chủ bài đăng</th>
        <th rowspan="2" scope="col">Nội dung bài đăng</th>
        <th rowspan="2" scope="col">Số đơn yêu cầu</th>
        <th rowspan="2" scope="col">Số đơn còn lại</th>
        <th rowspan="2" scope="col">Trạng thái </th>
        <th rowspan="2" scope="col">Số coin thưởng </th>
        <th rowspan="2" scope="col">Ngày đăng</th>
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
          <th scope="col">Hành động</th>
      </tr>
    </thead>
    <tbody>
        <?php $k = 0; $postHistoryGroupBy = groupbyKey('basePostId', $postHistories) ?>
        @foreach ($postHistoryGroupBy as $basePostId => $listTransactions )
            <?php $numberRowspan =  count($listTransactions); ?>
            <tr
                data-transactionid="{{$listTransactions[0]->id}}"
                data-transactionstatus="{{ $listTransactions[0]->transaction_status }}"
                data-member="{{ $listTransactions[0]->member }}"
                data-nickShopee="{{ $listTransactions[0]->link_shopee }}"
            >
                <th rowspan="{{ $numberRowspan }}" scope="row">{{ ++$k }}</th>
                <td rowspan="{{ $numberRowspan }}">{{ $listTransactions[0]->authorname }}</td>
                <td rowspan="{{ $numberRowspan }}">
                    <div class="row">
                        <div class="col-sm-6">
                            <image src="{{asset('storage/'.$listTransactions[0]->image)}}"></image>
                        </div>
                        <div class="col-sm-6">{{ $listTransactions[0]->content }}</div>
                    </div>
                </td>
                <td rowspan="{{ $numberRowspan }}">{{ $listTransactions[0]->number_order }}</td>
                <td rowspan="{{ $numberRowspan }}">{{ $listTransactions[0]->number_order_remaining }}</td>
                <td rowspan="{{ $numberRowspan }}">{{ getPostStatus($listTransactions[0]->status) }}</td>
                <td rowspan="{{ $numberRowspan }}">{{ $listTransactions[0]->coin_pay }}</td>
                <td rowspan="{{ $numberRowspan }}">{{ $listTransactions[0]->post_created }}</td>
                <td>{{ $listTransactions[0]->member }}</td>
                <td>{{ getTransactionOrderStatus($listTransactions[0]->transaction_status) }}</td>
                <td>{{ $listTransactions[0]->money_cod }}</td>
                <td>{{ $listTransactions[0]->transaction_code }}</td>
                <td>{{ $listTransactions[0]->order_code }}</td>
                <td>{{ $listTransactions[0]->link_shopee }}</td>
                <td>{{ $listTransactions[0]->created_at }}</td>
                <td>
                    <div class="row">
                        @if ($listTransactions[0]->transaction_status == 0)
                            <button type="button" class="btn btn-success btn-confirm-order">Xác nhận đơn</button>
                        @endif
                        @if($listTransactions[0]->transaction_status == 0 || $listTransactions[0]->transaction_status == 1 || $listTransactions[0]->transaction_status == 2)
                            <button type="button" class="btn btn-danger btn-cancel-order">Hủy đơn</button>
                        @endif
                    </div>
                </td>
            </tr>
            @foreach ($listTransactions as $num => $transaction )
                @if($num !== 0)
                    <tr data-transactionid="{{ $transaction->id }}"
                        data-transactionstatus="{{ $transaction->transaction_status }}"
                        data-member="{{ $transaction->member }}"
                        data-nickShopee="{{ $transaction->link_shopee }}"
                        >
                        <td>{{ $transaction->member }}</td>
                        <td>{{ getTransactionOrderStatus($transaction->transaction_status) }}</td>
                        <td>{{ $transaction->money_cod }}</td>
                        <td>{{ $transaction->transaction_code }}</td>
                        <td>{{ $transaction->order_code }}</td>
                        <td>{{ $transaction->link_shopee }}</td>
                        <td>{{ $transaction->created_at }}</td>
                        <td>
                            <div class="row">
                                @if ($transaction->transaction_status == 0)
                                    <button type="button" class="btn btn-success btn-confirm-order">Xác nhận đơn</button>
                                @endif
                                @if($transaction->transaction_status == 0 || $transaction->transaction_status == 1 || $transaction->transaction_status == 2)
                                    <button type="button" class="btn btn-danger btn-cancel-order">Hủy đơn</button>
                                @endif
                            </div>
                            
                        </td>
                    </tr>
                @endif
            @endforeach
        @endforeach
      
      
    </tbody>
  </table>
  