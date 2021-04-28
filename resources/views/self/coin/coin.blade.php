
@extends('layouts.master')
@section('css')
<!-- <link rel="stylesheet" href="css/home-custom.css"> -->
@stop
@section('page_title', 'Lịch sử nạp coin')
@section('content')
  <main role="main">
    <section class="bg-gray200 pt-5 pb-5">
    <div class="container">
      <div class="form-group">
        <h3>Lịch sử nạp coin</h3>
      </div>
      <div class="form-group" style="text-align: right"><button type="button" id="btn-add-coin" class="btn btn-primary">Nạp thêm coin</button></div>
      <div class="row justify-content-center">
            <br/>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead class="thead-light ">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Người đặt</th>
                        <th scope="col">Số coin</th>
                        <th scope="col">Bằng chứng</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Ngày nạp</th>
                        @if(Auth::user()->is_admin)
                            <th scope="col">Hành động</th>
                        @endif
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($coinHistories as $k => $coinHistory )
                            <tr data-coinHistoryid="{{$coinHistory->id}}"
                              data-member="{{$coinHistory->member}}"
                              data-coin="{{$coinHistory->coin}}" >
                                <th scope="row">{{ ++$k }}</th>
                                <td>{{ $coinHistory->member }}</td>
                                <td>{{ $coinHistory->coin }}</td>
                                <td><img class="card-img" src="{{asset('storage/'. $coinHistory->evidence)}}" alt="Card image"></td>
                                <td>{{ $coinHistory->is_confirm ? "Đã nhận" : "Chờ duyệt" }}</td>
                                <td>{{ $coinHistory->created_at }}</td>
                                @if (Auth::user()->is_admin)
                                <td>
                                    <div class="row">
                                        @if (!$coinHistory->is_confirm)
                                          <button type="button" class="btn btn-success btn-confirm-received-coin">Đã nhận</button>
                                          <button type="button" class="btn btn-danger btn-cancel-order">Hủy</button>
                                        @endif
                                    </div>
                                </td>
                                @endif
                            </tr>      
                        @endforeach
                    </tbody>
                  </table>
                  
            </div>
          </div>
    </div>
    </section>
  </main>
  @include('self.coin.modal.modal_add_coin')
  @include('self.coin.modal.modal_confirm_received_coin')
  <script type="text/javascript" src="{{ URL::asset('/assets/js/transaction_order/transaction_order.js') }}"></script>
@endsection



