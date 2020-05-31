@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="css/home-custom.css">
@stop
@section('page_title', 'Trang chủ')
@section('banner-area')
  <section class="banner-area">   
      <div class="container">
        <div class="row fullscreen align-items-center justify-content-between">
          <div class="col-lg-12 banner-content">
            <h6 class="text-white">Wide Options of Choice</h6>
            <h1 class="text-white">Delicious Recipes</h1>
            <p class="text-white">
              inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women.
            </p>
            <a href="#" class="primary-btn text-uppercase">Check Our Menu</a>
          </div>
        </div>
      </div>
    </section>
@endsection

@section('services-area')
  <div class="section_0">
  <div class="clearfix">
    <div class="col-cus-section">
        <div class="col-top text-center">
          <h2>Daily Menu</h2>
          <p>Thưởng thức ngay bữa salad xanh sạch siêu dưỡng chất,và cực hấp dẫn với 15 vị sốt homemade</p>
          <a href="/collections/all" target="_blank">Xem ngay menu</a>
        </div>
        <div class="col-bottom"></div>
      </div>
    <div class="col-cus-section">
        <div class="col-top text-center">
          <h2>Thực đơn tuần</h2>
          <p>Lên kế hoạch và chọn ngay thực đơn tuần cực healthy  ngay hôm nay nào</p>
          <a href="/pages/landingpage" target="_blank">Lên kế hoạch ngay</a>
        </div>
        <div class="col-bottom"></div>
      </div>
    <div class="col-cus-section">
        <div class="col-top text-center">
          <h2>Suất ăn doanh nghiệp</h2>
          <p>Đã đến lúc bạn thay đổi bữa ăn văn phòng cho cả công ty hay phòng ban của mình rồi</p>
          <a href="https://m.me/eatmoresaladvn?ref=B2Bweb-ref" target="_blank">Tìm hiểu cho công ty</a>
        </div>
        <div class="col-bottom"></div>
      </div>
  </div>
</div>
@stop

@section('home-about-area')
  <section class="home-about-area section-gap">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 home-about-left">
          <h1>About Our Story</h1>
          <p>
            Who are in extremely love with eco friendly system. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
          <a href="#" class="primary-btn">view full menu</a>
        </div>
        <div class="col-lg-6 home-about-right">
          <img class="img-fluid" src="img/about-img.jpg" alt="">
        </div>
      </div>
    </div>  
  </section>
@stop

@section('menu-area')
  <section class="menu-area section-gap" id="menu">
    <div class="container">

      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-70 col-lg-8">
          <div class="title text-center">
            <h1 class="mb-10">What kind of Foods we serve for you</h1>
            <p>Who are in extremely love with eco friendly system.</p>
          </div>
        </div>
      </div>

      <ul class="filter-wrap filters col-lg-12 no-padding">
          <li class="active" data-filter="*">All Menu</li>
          <li data-filter=".breakfast">Breakfast</li>
          <li data-filter=".lunch">Lunch</li>
          <li data-filter=".dinner">Dinner</li>
          <li data-filter=".budget-meal">Salad</li>
          <li data-filter=".buffet">Đồ Uống & Detox</li>
          <li data-filter=".other">Các Món Đi Kèm</li>
      </ul>

      <div class="filters-content">

        <div class="row grid">
          <div class="col-md-6 all breakfast">
                <div class="single-menu">
                  <div class="title-wrap d-flex justify-content-between">
                    <h4>Cappuccion</h4>
                    <h4 class="price">$49</h4>
                  </div>
                  <p>
                    Usage of the Internet is becoming more common due to rapid advance.
                  </p>
                </div>
          </div>

          <div class="col-md-6 all dinner">
                <div class="single-menu">
                  <div class="title-wrap d-flex justify-content-between">
                    <h4>Americano</h4>
                    <h4 class="price">$49</h4>
                  </div>      
                  <p>
                    Usage of the Internet is becoming more common due to rapid advance.
                  </p>
                </div>
          </div>

          <div class="col-md-6 all budget-meal">
            <div class="single-menu">
              <div class="title-wrap d-flex justify-content-between">
                <h4>Macchiato</h4>
                <h4 class="price">$49</h4>
              </div>
              <p>
                Usage of the Internet is becoming more common due to rapid advance.
              </p>
            </div>
          </div>

          <div class="col-md-6 all breakfast">
            <div class="single-menu">
              <div class="title-wrap d-flex justify-content-between">
                <h4>Mocha</h4>
                <h4 class="price">$49</h4>
              </div>
              <p>
                Usage of the Internet is becoming more common due to rapid advance.
              </p>                  
            </div>
          </div>

          <div class="col-md-6 all lunch">
            <div class="single-menu">
              <div class="title-wrap d-flex justify-content-between">
                <h4>Piccolo Latte</h4>
                <h4 class="price">$49</h4>
              </div>
              <p>
                Usage of the Internet is becoming more common due to rapid advance.
              </p>                  
            </div>
          </div>

          <div class="col-md-6 all buffet">
            <div class="single-menu">
              <div class="title-wrap d-flex justify-content-between">
                <h4>Ristretto</h4>
                <h4 class="price">$49</h4>
              </div>
              <p>
                Usage of the Internet is becoming more common due to rapid advance.
              </p>                  
            </div>
          </div> 

          <div class="col-md-6 all other">
            <div class="single-menu">
              <div class="title-wrap d-flex justify-content-between">
                <h4>Ristretto</h4>
                <h4 class="price">$49</h4>
              </div>
              <p>
                Usage of the Internet is becoming more common due to rapid advance.
              </p>                  
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>
@stop

@section('reservation-area')
  <section class="reservation-area section-gap relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 reservation-left">
          <h1 class="text-white">Reserve Your Seats
                to Confirm if You Come
                with Your Family</h1>
          <p class="text-white pt-20">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.
                </p>
        </div>
        <div class="col-lg-5 reservation-right">
          <form class="form-wrap text-center" action="#">
            <input type="text" class="form-control" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" >
              <input type="email" class="form-control" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" >
                <input type="text" class="form-control" name="phone" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" >
                  <input type="text" class="form-control date-picker" name="date" placeholder="Select Date & time" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Select Date & time'" >
                    <div class="form-select" id="service-select">
                      <select>
                        <option data-display="">Select Event</option>
                        <option value="1">Event One</option>
                        <option value="2">Event Two</option>
                        <option value="3">Event Three</option>
                        <option value="4">Event Four</option>
                      </select>
                    </div>
                    <button class="primary-btn text-uppercase mt-20">Make Reservation</button>
                  </form>
                </div>
              </div>
            </div>
          </section>
@stop

@section('gallery-area')
  <section class="gallery-area section-gap" id="gallery">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="menu-content pb-70 col-lg-8">
        <div class="title text-center">
          <h1 class="mb-10">Food and Customer Gallery</h1>
          <p>Who are in extremely love with eco friendly system.</p>
        </div>
      </div>
    </div>
    <ul class="filter-wrap filters col-lg-12 no-padding">
      <li class="active" data-filter="*">All Menu</li>
      <li data-filter=".breakfast">Breakfast</li>
      <li data-filter=".lunch">Lunch</li>
      <li data-filter=".dinner">Dinner</li>
      <li data-filter=".budget-meal">Budget Meal</li>
      <li data-filter=".buffet">Buffet</li>
    </ul>
    <div class="filters-content">
      <div class="row grid">
        <div class="col-lg-4 col-md-6 col-sm-6 all breakfast">
          <div class="single-gallery">
            <img class="img-fluid" src="img/g1.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 all dinner">
          <div class="single-gallery">
            <img class="img-fluid" src="img/g2.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 all budget-meal">
          <div class="single-gallery">
            <img class="img-fluid" src="img/g3.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 all breakfast">
          <div class="single-gallery">
            <img class="img-fluid" src="img/g4.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 all lunch">
            <div class="single-gallery">
              <img class="img-fluid" src="img/g5.jpg" alt="">
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 all buffet">
              <div class="single-gallery">
                <img class="img-fluid" src="img/g6.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@stop

@section('review-area')
  <section class="review-area section-gap">
    <div class="container">
      <div class="row">
        <div class="active-review-carusel">
          <div class="single-review">
            <img src="img/user.png" alt="">
            <h4>Hulda Sutton</h4>
            <div class="star">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>                
            </div>  
            <p>
              “Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.”
            </p>
          </div>
          <div class="single-review">
            <img src="img/user.png" alt="">
            <h4>Hulda Sutton</h4>
            <div class="star">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>                
            </div>  
            <p>
              “Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.”
            </p>
          </div>  
          <div class="single-review">
            <img src="img/user.png" alt="">
            <h4>Hulda Sutton</h4>
            <div class="star">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>                
            </div>  
            <p>
              “Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.”
            </p>
          </div>
          <div class="single-review">
            <img src="img/user.png" alt="">
            <h4>Hulda Sutton</h4>
            <div class="star">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>                
            </div>  
            <p>
              “Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.”
            </p>
          </div>                            
        </div>
      </div>
    </div>  
  </section>
@stop

@section('blog-area')
  <section class="blog-area section-gap" id="blog">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-70 col-lg-8">
          <div class="title text-center">
            <h1 class="mb-10">Latest From Our Blog</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
          </div>
        </div>
      </div>          
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 single-blog">
          <div class="thumb">
            <img class="img-fluid" src="img/b1.jpg" alt="">               
          </div>
          <p class="date">10 Jan 2018</p>
          <a href="blog-single.html"><h4>Cooking Perfect Fried Rice
          in minutes</h4></a>
          <p>
            inappropriate behavior ipsum dolor sit amet, consectetur.
          </p>
          <div class="meta-bottom d-flex justify-content-between">
            <p><span class="lnr lnr-heart"></span> 15 Likes</p>
            <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
          </div>                  
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 single-blog">
          <div class="thumb">
            <img class="img-fluid" src="img/b2.jpg" alt="">               
          </div>
          <p class="date">10 Jan 2018</p>
          <a href="blog-single.html"><h4>Secret of making Heart 
          Shaped eggs</h4></a>
          <p>
            inappropriate behavior ipsum dolor sit amet, consectetur.
          </p>
          <div class="meta-bottom d-flex justify-content-between">
            <p><span class="lnr lnr-heart"></span> 15 Likes</p>
            <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
          </div>                  
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 single-blog">
          <div class="thumb">
            <img class="img-fluid" src="img/b3.jpg" alt="">               
          </div>
          <p class="date">10 Jan 2018</p>
          <a href="blog-single.html"><h4>How to check steak if 
          it is tender or not</h4></a>
          <p>
            inappropriate behavior ipsum dolor sit amet, consectetur.
          </p>
          <div class="meta-bottom d-flex justify-content-between">
            <p><span class="lnr lnr-heart"></span> 15 Likes</p>
            <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
          </div>                  
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 single-blog">
          <div class="thumb">
            <img class="img-fluid" src="img/b4.jpg" alt="">               
          </div>
          <p class="date">10 Jan 2018</p>
          <a href="blog-single.html"><h4>Seaseme and black seed
          Flavored Bun Rocks</h4></a>
          <p>
            inappropriate behavior ipsum dolor sit amet, consectetur.
          </p>
          <div class="meta-bottom d-flex justify-content-between">
            <p><span class="lnr lnr-heart"></span> 15 Likes</p>
            <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
          </div>                  
        </div>              
      </div>
    </div>  
  </section>
@stop


