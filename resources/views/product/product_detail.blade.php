@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{asset('css/home-custom.css')}}">
@stop
@section('page_title', 'Chi tiết món ăn')

@section('prd-detail')
    <section class="about-banner relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">             
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        About Us                
                    </h1>   
                    <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.html"> About Us</a></p>
                </div>  
            </div>
        </div>
    </section>

    <section class="home-about-area section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 home-about-left">
                    <h1>{{$product->name}}</h1>
                    <p>
                        {{$product->description}}
                    </p>
                    <a href="#" class="primary-btn">view full menu</a>
                </div>
                <div class="col-lg-6 home-about-right">
                    <img src="{{$product->thumbnail_image}}" alt="">
                </div>
            </div>
        </div>  
    </section>
@endsection

<!-- Start home-about Area -->
            
            <!-- End home-about Area -->    
