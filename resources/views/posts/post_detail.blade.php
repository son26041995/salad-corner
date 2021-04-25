
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
            <h1 class="card-title display-4">
            {{ $post->title }} </h1>
            <ul>
              <li>{{$post->content }}</li>
              <li>Số lượng đơn cần đặt: {{ $post->number_order }}</li>
              <li>Số lượng đơn còn thiếu: {{ $post->number_order - $post->number_order_remaining }}</li>
              <li>Coin thưởng mỗi đơn: {{ $post->coin_pay }}</li>
              <li>Yêu Cầu Phương thức thanh toán: {{ getRequirementPayment($post->requirement_payment) }}</li>
              <li>Áp mã freeship: {{ getIsApplyFreeship($post->is_apply_freeship) }}</li>
            </ul>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_view_link_order">Xem link đặt hàng</button>
          </div>
          </article>
        </div>
      </div>
    </div>
    <div class="container-fluid mt-5">
      <div class="row">
        <h5 class="font-weight-bold">More like this</h5>
        <div class="card-columns">
          <div class="card card-pin">
            <img class="card-img" src="https://images.unsplash.com/photo-1518707399486-6d702a84ff00?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=b5bb16fa7eaed1a1ed47614488f7588d&auto=format&fit=crop&w=500&q=60" alt="Card image">
            <div class="overlay">
              <h2 class="card-title title">Some Title</h2>
              <div class="more">
                <a href="post.html">
                <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
              </div>
            </div>
          </div>
          <div class="card card-pin">
            <img class="card-img" src="https://images.unsplash.com/photo-1519408299519-b7a0274f7d67?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=d4891b98f4554cc55eab1e4a923cbdb1&auto=format&fit=crop&w=500&q=60" alt="Card image">
            <div class="overlay">
              <h2 class="card-title title">Some Title</h2>
              <div class="more">
                <a href="post.html">
                <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
              </div>
            </div>
          </div>
          <div class="card card-pin">
            <img class="card-img" src="https://images.unsplash.com/photo-1506706435692-290e0c5b4505?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=0bb464bb1ceea5155bc079c4f50bc36a&auto=format&fit=crop&w=500&q=60" alt="Card image">
            <div class="overlay">
              <h2 class="card-title title">Some Title</h2>
              <div class="more">
                <a href="post.html">
                <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
              </div>
            </div>
          </div>
          <div class="card card-pin">
            <img class="card-img" src="https://images.unsplash.com/photo-1512355144108-e94a235b10af?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c622d56d975113a08c71c912618b5f83&auto=format&fit=crop&w=500&q=60" alt="Card image">
            <div class="overlay">
              <h2 class="card-title title">Some Title</h2>
              <div class="more">
                <a href="post.html">
                <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
              </div>
            </div>
          </div>
          <div class="card card-pin">
            <img class="card-img" src="https://images.unsplash.com/photo-1518542331925-4e91e9aa0074?ixlib=rb-0.3.5&s=6958cfb3469de1e681bf17587bed53be&auto=format&fit=crop&w=500&q=60" alt="Card image">
            <div class="overlay">
              <h2 class="card-title title">Some Title</h2>
              <div class="more">
                <a href="post.html">
                <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
              </div>
            </div>
          </div>
          <div class="card card-pin">
            <img class="card-img" src="https://images.unsplash.com/photo-1513028179155-324cfec2566c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=32ce1df4016dadc177d6fce1b2df2429&auto=format&fit=crop&w=350&q=80" alt="Card image">
            <div class="overlay">
              <h2 class="card-title title">Some Title</h2>
              <div class="more">
                <a href="post.html">
                <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
              </div>
            </div>
          </div>
          <div class="card card-pin">
            <img class="card-img" src="https://images.unsplash.com/photo-1516601255109-506725109807?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ce4f3db9818f60686e8e9b62d4920ce5&auto=format&fit=crop&w=500&q=60" alt="Card image">
            <div class="overlay">
              <h2 class="card-title title">Some Title</h2>
              <div class="more">
                <a href="post.html">
                <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
              </div>
            </div>
          </div>
          <div class="card card-pin">
            <img class="card-img" src="https://images.unsplash.com/photo-1505210512658-3ae58ae08744?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=2ef2e23adda7b89a804cf232f57e3ca3&auto=format&fit=crop&w=333&q=80" alt="Card image">
            <div class="overlay">
              <h2 class="card-title title">Some Title</h2>
              <div class="more">
                <a href="post.html">
                <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
              </div>
            </div>
          </div>
          <div class="card card-pin">
            <img class="card-img" src="https://images.unsplash.com/photo-1488353816557-87cd574cea04?ixlib=rb-0.3.5&s=06371203b2e3ad3e241c45f4e149a1b3&auto=format&fit=crop&w=334&q=80" alt="Card image">
            <div class="overlay">
              <h2 class="card-title title">Some Title</h2>
              <div class="more">
                <a href="post.html">
                <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
              </div>
            </div>
          </div>
          <div class="card card-pin">
            <img class="card-img" src="https://images.unsplash.com/photo-1518450757707-d21c8c53c8df?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c88b5f311958f841525fdb01ab3b5deb&auto=format&fit=crop&w=500&q=60" alt="Card image">
            <div class="overlay">
              <h2 class="card-title title">Some Title</h2>
              <div class="more">
                <a href="post.html">
                <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
  </main>
  @include('posts.modal.modal_view_link_order')
@endsection



