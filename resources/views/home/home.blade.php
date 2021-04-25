@extends('layouts.master')
@section('css')
<!-- <link rel="stylesheet" href="css/home-custom.css"> -->
@stop
@section('page_title', 'Trang chủ')
@section('navbar_explore')
  @include('patiants.navbar_explore')
@stop
@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="card-columns">
        @foreach($posts as $post)
          <a href="/post/{{$post->postId}}">
            <div class="card card-pin">
              <img class="card-img" src="{{asset('storage/'.$post->image)}}" alt="Card image">
              <div class="">
                <div class="card-title title"><h5>{{ $post->title }}</h5></div>
                <div class="">
                  <a data-v-19eaa692="" href="/profile/71fa571fc4364e5dab9fe113b44003d1" class="author d-flex align-items-center float-left">
                    <img style="width: 22px; height: 22px;object-fit: cover" alt="{{ $post->name }}" title="Riviu" src="{{ $post->avatar }}" class="rounded-circle mr-1" style="object-fit: cover;">
                    <span data-v-19eaa692="" class="my-auto text-truncate">{{ $post->name }}</span>
                  </a>
                </div>
              </div>
            </div>
          </a>
        @endforeach
        
        <!-- <div class="card card-pin">
          <img class="card-img" src="https://images.unsplash.com/photo-1519996521430-02b798c1d881?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=79f770fc1a5d8ff9b0eb033d0f09e15d&auto=format&fit=crop&w=500&q=60" alt="Card image">
          <div class="overlay">
            <h2 class="card-title title">Cool Title</h2>
            <div class="more">
              <a href="post.html">
              <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
            </div>
          </div>
        </div>
        <div class="card card-pin">
          <img class="card-img" src="https://images.unsplash.com/photo-1505210512658-3ae58ae08744?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=2ef2e23adda7b89a804cf232f57e3ca3&auto=format&fit=crop&w=333&q=80" alt="Card image">
          <div class="overlay">
            <h2 class="card-title title">Cool Title</h2>
            <div class="more">
              <a href="post.html">
              <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
            </div>
          </div>
        </div>
        <div class="card card-pin">
          <img class="card-img" src="https://images.unsplash.com/photo-1488353816557-87cd574cea04?ixlib=rb-0.3.5&s=06371203b2e3ad3e241c45f4e149a1b3&auto=format&fit=crop&w=334&q=80" alt="Card image">
          <div class="overlay">
            <h2 class="card-title title">Cool Title</h2>
            <div class="more">
              <a href="post.html">
              <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
            </div>
          </div>
        </div>
        <div class="card card-pin">
          <img class="card-img" src="https://images.unsplash.com/photo-1518450757707-d21c8c53c8df?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c88b5f311958f841525fdb01ab3b5deb&auto=format&fit=crop&w=500&q=60" alt="Card image">
          <div class="overlay">
            <h2 class="card-title title">Cool Title</h2>
            <div class="more">
              <a href="post.html">
              <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
            </div>
          </div>
        </div>
        <div class="card card-pin">
          <img class="card-img" src="https://images.unsplash.com/photo-1483190656465-2c49e54d29f3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=7c4d831daffc28f6ce144ae9e44072e2&auto=format&fit=crop&w=500&q=60" alt="Card image">
          <div class="overlay">
            <h2 class="card-title title">Cool Title</h2>
            <div class="more">
              <a href="post.html">
              <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
            </div>
          </div>
        </div>
        <div class="card card-pin">
          <img class="card-img" src="https://images.unsplash.com/photo-1501813531019-338a4182efb0?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ad934c7483b928cae6b0b9cde5ae3445&auto=format&fit=crop&w=500&q=60" alt="Card image">
          <div class="overlay">
            <h2 class="card-title title">Cool Title</h2>
            <div class="more">
              <a href="post.html">
              <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
            </div>
          </div>
        </div>
        <div class="card card-pin">
          <img class="card-img" src="https://images.unsplash.com/photo-1518542331925-4e91e9aa0074?ixlib=rb-0.3.5&s=6958cfb3469de1e681bf17587bed53be&auto=format&fit=crop&w=500&q=60" alt="Card image">
          <div class="overlay">
            <h2 class="card-title title">Cool Title</h2>
            <div class="more">
              <a href="post.html">
              <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
            </div>
          </div>
        </div>
        <div class="card card-pin">
          <img class="card-img" src="https://images.unsplash.com/photo-1513028179155-324cfec2566c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=32ce1df4016dadc177d6fce1b2df2429&auto=format&fit=crop&w=350&q=80" alt="Card image">
          <div class="overlay">
            <h2 class="card-title title">Cool Title</h2>
            <div class="more">
              <a href="post.html">
              <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
            </div>
          </div>
        </div>
        <div class="card card-pin">
          <img class="card-img" src="https://images.unsplash.com/photo-1516601255109-506725109807?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ce4f3db9818f60686e8e9b62d4920ce5&auto=format&fit=crop&w=500&q=60" alt="Card image">
          <div class="overlay">
            <h2 class="card-title title">Cool Title</h2>
            <div class="more">
              <a href="post.html">
              <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
            </div>
          </div>
        </div>
        <div class="card card-pin">
          <img class="card-img" src="https://images.unsplash.com/photo-1509233631037-deb7efd36207?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=75a5d784cdfc8f5ced8a6fe26c6d921e&auto=format&fit=crop&w=500&q=60" alt="Card image">
          <div class="overlay">
            <h2 class="card-title title">Cool Title</h2>
            <div class="more">
              <a href="post.html">
              <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
            </div>
          </div>
        </div>
        <div class="card card-pin">
          <img class="card-img" src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?ixlib=rb-0.3.5&s=c0043ea5aa03f62a294636f93725dd6e&auto=format&fit=crop&w=500&q=60" alt="Card image">
          <div class="overlay">
            <h2 class="card-title title">Cool Title</h2>
            <div class="more">
              <a href="post.html">
              <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
            </div>
          </div>
        </div>
        <div class="card card-pin">
          <img class="card-img" src="https://images.unsplash.com/photo-1485627658391-1365e4e0dbfe?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=976b0db5c3c2b9932bb20e72f98f9b61&auto=format&fit=crop&w=500&q=60" alt="Card image">
          <div class="overlay">
            <h2 class="card-title title">Cool Title</h2>
            <div class="more">
              <a href="post.html">
              <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
            </div>
          </div>
        </div>
        <div class="card card-pin">
          <img class="card-img" src="https://images.unsplash.com/photo-1502550900787-e956c314a221?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e90f191de3a03c2002ac82c009490e07&auto=format&fit=crop&w=500&q=60" alt="Card image">
          <div class="overlay">
            <h2 class="card-title title">Cool Title</h2>
            <div class="more">
              <a href="post.html">
              <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
            </div>
          </div>
        </div>
        <div class="card card-pin">
          <img class="card-img" src="https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=9e3cd6ce6496c9c05cbf1b6cda8be0f9&auto=format&fit=crop&w=500&q=60" alt="Card image">
          <div class="overlay">
            <h2 class="card-title title">Cool Title</h2>
            <div class="more">
              <a href="post.html">
              <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
            </div>
          </div>
        </div>
        <div class="card card-pin">
          <img class="card-img" src="https://images.unsplash.com/photo-1509885903707-b68568db61ed?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=5f11503655b51165836c2dcefa51a040&auto=format&fit=crop&w=500&q=60" alt="Card image">
          <div class="overlay">
            <h2 class="card-title title">Cool Title</h2>
            <div class="more">
              <a href="post.html">
              <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
            </div>
          </div>
        </div>
        <div class="card card-pin">
          <img class="card-img" src="https://images.unsplash.com/photo-1518707399486-6d702a84ff00?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=b5bb16fa7eaed1a1ed47614488f7588d&auto=format&fit=crop&w=500&q=60" alt="Card image">
          <div class="overlay">
            <h2 class="card-title title">Cool Title</h2>
            <div class="more">
              <a href="post.html">
              <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
            </div>
          </div>
        </div>
        <div class="card card-pin">
          <img class="card-img" src="https://images.unsplash.com/photo-1519408299519-b7a0274f7d67?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=d4891b98f4554cc55eab1e4a923cbdb1&auto=format&fit=crop&w=500&q=60" alt="Card image">
          <div class="overlay">
            <h2 class="card-title title">Cool Title</h2>
            <div class="more">
              <a href="post.html">
              <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
            </div>
          </div>
        </div>
        <div class="card card-pin">
          <img class="card-img" src="https://images.unsplash.com/photo-1506706435692-290e0c5b4505?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=0bb464bb1ceea5155bc079c4f50bc36a&auto=format&fit=crop&w=500&q=60" alt="Card image">
          <div class="overlay">
            <h2 class="card-title title">Cool Title</h2>
            <div class="more">
              <a href="post.html">
              <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
            </div>
          </div>
        </div>
        <div class="card card-pin">
          <img class="card-img" src="https://images.unsplash.com/photo-1512355144108-e94a235b10af?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c622d56d975113a08c71c912618b5f83&auto=format&fit=crop&w=500&q=60" alt="Card image">
          <div class="overlay">
            <h2 class="card-title title">Cool Title</h2>
            <div class="more">
              <a href="post.html">
              <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
            </div>
          </div>
        </div> -->
      </div>
    </div>
     <script type="text/javascript" src="{{ URL::asset('assets/js/transaction_order/transaction_order.js') }}"></script>
     @include('home.modal.modal_create_new_post')
  </div>
  
  {{ $posts->links() }}
@endsection


