
@extends('layouts.master')
@section('css')
<!-- <link rel="stylesheet" href="css/home-custom.css"> -->
@stop
@section('page_title', 'Chi tiết bài đăng')
@section('content')
  <main role="main">
    <section class="bg-gray200 pt-5 pb-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7">
          <article class="card">
          <img class="card-img-top mb-2" src="{{asset('storage/'.$post->image)}}" alt="Card image">
          <div class="card-body">
            @if ($post->is_deleted)
            <div class="alert alert-danger">Đã xóa</div>
            @endif
            <h1 class="card-title display-4">
            {{ $post->title }} </h1> 
            {{$post->requirement_payment}}
            <ul>
              <li>{{$post->content }}</li>
              <li>Số lượng đơn cần đặt: {{ $post->number_order }}</li>
              <li>Số lượng đơn còn thiếu: {{ $post->number_order - $post->number_order_remaining }}</li>
              <li>Coin thưởng mỗi đơn: {{ $post->coin_pay }}</li>
              <li>Yêu Cầu Phương thức thanh toán: {{ getRequirementPayment($post->requirement_payment) }}</li>
              <li>Áp mã freeship: {{ getIsApplyFreeship($post->is_apply_freeship) }}</li>
            </ul>
            <div class="row">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_view_link_order">Xem link đặt hàng</button>
              @if ($post->user_id == Auth::id() && $post->is_deleted == 0)
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal_edit_post">Sửa bài viết</button>
              <button type="button" class="btn btn-primary btn-delete-post">Xóa bài viết</button>
              @endif
            </div>
            <input type="hidden" id="postId" value="{{$post->id}}">
          </div>
          </article>
        </div>
      </div>
    </div>
    <div class="container-fluid mt-5">
      <div class="row">
        <h5 class="font-weight-bold">More like this</h5>
        <div class="card-columns">
          @foreach($postMoreLikeThis as $postLikeThis)
            <a href="/post/{{$postLikeThis->postId}}">
              <div class="card card-pin">
                <img class="card-img" src="{{asset('storage/'.$postLikeThis->image)}}" alt="Card image">
                <div class="">
                  <div class="card-title title"><h5>{{ $postLikeThis->title }}</h5></div>
                  <div class="">
                    <a data-v-19eaa692="" href="/profile/71fa571fc4364e5dab9fe113b44003d1" class="author d-flex align-items-center float-left">
                      <img style="width: 22px; height: 22px;object-fit: cover" alt="{{ $postLikeThis->name }}" title="Riviu" src="{{ $postLikeThis->avatar }}" class="rounded-circle mr-1" style="object-fit: cover;">
                      <span data-v-19eaa692="" class="my-auto text-truncate">{{ $postLikeThis->name }}</span>
                    </a>
                  </div>
                </div>
              </div>
            </a>
          @endforeach
          
        </div>
      </div>
    </div>
    </section>
  </main>
  @include('posts.modal.modal_view_link_order')
  @include('posts.modal.modal_edit_post')
  @include('posts.modal.modal_confirm_delete_post')
  <script type="text/javascript" src="{{ URL::asset('/assets/js/transaction_order/transaction_order.js') }}"></script>
@endsection



