<?php
  
?>
@extends('layouts.master')
@section('css')
<!-- <link rel="stylesheet" href="css/home-custom.css"> -->
@stop
@section('page_title', 'Lịch sử chuyển khoản hàng')
@section('content')
  <main role="main">
    <section class="bg-gray200 pt-5 pb-5">
    <div class="">
      
      <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead class="thead-light ">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Người chuyển khoản</th>
                    <th scope="col">Số tiền</th>
                    <th scope="col">Bằng chứng</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Đơn hàng</th>
                    <th scope="col">Ngày tạo</th>
                    <th scope="col">Ngày cập nhật</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($transferMoneyHistories as $k => $transferMoneyHistory )
                        <tr data-transferid="{{$transferMoneyHistory->id}}"
                            data-member="{{$transferMoneyHistory->member}}"
                            data-money="{{$transferMoneyHistory->money}}"
                            >
                            <th scope="row">{{ ++$k }}</th>
                            <td>{{ $transferMoneyHistory->member }}</td>
                            <td>{{ $transferMoneyHistory->money }}</td>
                            <td><img class="card-img" src="{{asset('storage/'. $transferMoneyHistory->evidence)}}" alt="Card image"></td>
                            <td>{{ getTransferStatus($transferMoneyHistory->is_received_money) }}</td>
                            <td><button class="btn btn-primary btn-view-order-list">Xem đơn hàng</button></td>
                            <td>{{ $transferMoneyHistory->created_at }}</td>
                            <td>{{ $transferMoneyHistory->updated_at }}</td>
                        </tr>      
                    @endforeach
                </tbody>
              </table>
              @include('self.transfer.modal.modal_view_order_by_transferid')
        </div>
      </div>
    </div>
    </section>
  </main>
  <script type="text/javascript" src="{{ URL::asset('/assets/js/transaction_order/transaction_order.js') }}"></script>
@endsection




