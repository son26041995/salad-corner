<?php
  
?>
@extends('layouts.master')
@section('css')
<!-- <link rel="stylesheet" href="css/home-custom.css"> -->
@stop
@section('page_title', 'Lịch sử đặt hàng')
@section('content')
  <main role="main">
    <section class="bg-gray200 pt-5 pb-5">
    <div class="">
      
      <div class="row justify-content-center">
        <div class="pull-right">
          <button id="btn_transfer_money" class="btn btn-primary">Thanh toán tiền COD</button>
        </div>
        <div class="col-md-12">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true" href="#order_history">Lịch sử đặt đơn</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" role="tab" aria-controls="profile" aria-selected="false" href="#post_history">Lịch sử đăng bài</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="order_history" role="tabpanel" aria-labelledby="home-tab">
                    @include('self.order.table_order_history')
                    {{ $orderHistory->links() }}
                </div>
                <div class="tab-pane fade" id="post_history" role="tabpanel" aria-labelledby="profile-tab">
                    @include('self.order.table_post_history')
                    {{ $postHistories->links() }}
                </div>
            </div>
        </div>
      </div>
    </div>
    </section>
  </main>
  @include('self.order.modal.modal_confirm_order')
  @include('self.order.modal.modal_complete_order')
  @include('self.order.modal.modal_transfer_money')
  @include('self.order.modal.modal_confirm_transfer_money')
  @include('self.order.modal.modal_confirm_cancel_order')
  @include('self.order.modal.modal_confirm_order_success')
  <script type="text/javascript" src="{{ URL::asset('/assets/js/transaction_order/transaction_order.js') }}"></script>
@endsection




