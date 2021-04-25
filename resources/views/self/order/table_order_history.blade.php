<table class="table table-bordered">
    <thead class="thead-light ">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Người đặt</th>
        <th scope="col">Bài đăng</th>
        <th scope="col">Chủ bài đăng</th>
        <th scope="col">Mã vận đơn</th>
        <th scope="col">Mã đơn hàng</th>
        <th scope="col">Trạng thái</th>
        <th scope="col">Số tiền</th>
        <th scope="col">Nick đặt</th>
        <th scope="col">Ngày đặt</th>
        <th scope="col">Ngày cập nhật</th>
        <th scope="col">Hành động</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($orderHistory as $k => $transactionOrder )
            <tr>
                <th scope="row">{{ ++$k }}</th>
                <td>{{ $transactionOrder->member }}</td>
                <td>{{ $transactionOrder->content }}</td>
                <td>{{ $transactionOrder->authorname }}</td>
                <td>{{ $transactionOrder->transaction_code }}</td>
                <td>{{ $transactionOrder->order_code }}</td>
                <td>{{ getTransactionOrderStatus($transactionOrder->transaction_status) }}</td>
                <td>{{ $transactionOrder->money_cod }}</td>
                <td>{{ $transactionOrder->link_shopee }}</td>
                <td>{{ $transactionOrder->created_at }}</td>
                <td>{{ $transactionOrder->updated_at }}</td>
                <td>
                    <div class="row">
                        @if ($transactionOrder->transaction_status < 4 && $transactionOrder->transaction_status >= 2)
                            <button type="button" class="btn btn-success btn-confirm-order">Đã nhận được hàng</button>
                        @endif
                        @if($transactionOrder->transaction_status == 0 || $transactionOrder->transaction_status == 1 || $transactionOrder->transaction_status == 2)
                            <button type="button" class="btn btn-danger btn-cancel-order">Hủy đơn</button>
                        @endif
                    </div>
                </td>
            </tr>      
        @endforeach
      
      
    </tbody>
  </table>
  