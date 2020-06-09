<!DOCTYPE html>
<html>
<head>
  <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>@yield('page_title')</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

      <!--
      CSS
      ============================================= -->
      <link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
      <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
      <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
      <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
      <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
      <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
      <link rel="stylesheet" href="{{asset('css/main.css')}}">
      <link rel="stylesheet" href="{{asset('css/custom/custom.css')}}">
      @yield('css')
</head>
<body>
  
  <header id="header">
    <div class="header-top">
      <div class="container">
          <div class="row justify-content-center">
              <div id="logo">
                <a href="index.html"><img src="{{asset('img/logo.png')}}" alt="" title="" /></a>
              </div>
          </div>                  
      </div>
    </div>
    <div class="container main-menu">
      <div class="row align-items-center justify-content-center d-flex">      
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="menu.html">Menu</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li class="menu-has-children"><a href="">Blog</a>
                <ul>
                  <li><a href="blog-home.html">Blog Home</a></li>
                  <li><a href="blog-single.html">Blog Single</a></li>
                </ul>
              </li> 
              <li class="menu-has-children"><a href="">Pages</a>
                <ul>
                    <li><a href="elements.html">Elements</a></li>
                  <li class="menu-has-children"><a href="">Level 2 </a>
                    <ul>
                      <li><a href="#">Item One</a></li>
                      <li><a href="#">Item Two</a></li>
                    </ul>
                  </li>                             
                </ul>
              </li>                                                     
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->                      
      </div>
    </div>
  </header><!-- #header -->
  
  @section('banner-area')
  @show

  @section('services-area')
  @show

  @section('home-about-area')
  @show

  @section('menu-area')
  @show

  @section('reservation-area')
  @show

  @section('gallery-area')
  @show

  @section('review-area')
  @show

  @section('blog-area')
  @show

  @section('prd-detail')
  @show

  <footer class="footer-area">
      <div class="footer-widget-wrap">
        <div class="container">
          <div class="row section-gap">
            <div class="col-lg-4  col-md-6 col-sm-6">
              <div class="single-footer-widget">
                <h4>Opening Hours</h4>
                <ul class="hr-list">
                  <li class="d-flex justify-content-between">
                    <span>Monday - Friday</span> <span>08.00 am - 10.00 pm</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <span>Saturday</span> <span>08.00 am - 10.00 pm</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <span>Sunday</span> <span>08.00 am - 10.00 pm</span>
                  </li>                                       
                </ul>
              </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-6">
              <div class="single-footer-widget">
                <h4>Contact Us</h4>
                <p>
                  56/8, los angeles, rochy beach, Santa monica, United states of america - 1205
                </p>
                <p class="number">
                  012-6532-568-9746 <br>
                  012-6532-569-9748
                </p>
              </div>
            </div>            
            <div class="col-lg-4  col-md-6 col-sm-6">
              <div class="single-footer-widget">
                <h4>Newsletter</h4>
                <p>You can trust us. we only send promo offers, not a single spam.</p>
                <div class="d-flex flex-row" id="mc_embed_signup">


                    <form class="navbar-form" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
                      <div class="input-group add-on align-items-center d-flex">
                          <input class="form-control" name="EMAIL" placeholder="Your Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email address'" required="" type="email">
                      <div style="position: absolute; left: -5000px;">
                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                      </div>
                        <div class="input-group-btn">
                          <button class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>
                        </div>
                      </div>
                        <div class="info mt-20"></div>
                    </form>
                </div>
              </div>
            </div>            
          </div>          
        </div>          
      </div>
      <div class="footer-bottom-wrap">
        <div class="container">
          <div class="row footer-bottom d-flex justify-content-between align-items-center">
            <p class="col-lg-8 col-mdcol-sm-6 -6 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <ul class="col-lg-4 col-mdcol-sm-6 -6 social-icons text-right">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>           
                        </ul>
          </div>            
        </div>
      </div>
    </footer>
  

  <script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
      <script src="{{asset('js/jquery-ui.js')}}"></script>
      <script src="{{asset('js/easing.min.js')}}"></script>
      <script src="{{asset('js/hoverIntent.js')}}"></script>
      <script src="{{asset('js/superfish.min.js')}}"></script>
      <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
      <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
      <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
      <script src="{{asset('js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
      <script src="{{asset('js/mail-script.js')}}"></script>
      <script src="{{asset('js/main.js')}}"></script>
  @yield('js')
</body>
</html>