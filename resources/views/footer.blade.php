<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Medwin</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700|Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<!-- Similarly, for JS files -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
    


   </head>
   <body>

      <!-- header section start -->

      <div class="header_section">

         <div class="container" style="margin: 0px 100px " style="color: aqua">

               <div class="custom_menu">
                  <ul>
                     <li class="active"><a href="in">Home</a></li>
                     <li><a href="about">About</a></li>
                     <li><a href="contact">Contact Us</a></li>

                     @if (Auth::check())
      <li><a href="products">Product</a></li>  <!-- Product page link will be shown if user is logged in -->
   @else
      <li><a href="javascript:void(0)" onclick="alert('Please login to view products')">Product</a></li>  <!-- Show message if not logged in -->
   @endif

                     <li>
                     @if (Auth::check())

            <a class="nav-link" href="{{ route('dashboard') }}">{{Auth::user()->name}}</a>
            <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>


            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>


    @else
        <li class="nav-item"> <a class="nav-link" href="{{ route('login') }}">Login</a> </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a> </li>
    @endif

</li>
                  </ul>
               </div>
               <form class="form-inline my-2 my-lg-0">
                  <div class="search_btn">
                     <ul class="navbar-nav">

</ul>

                  </div>
               </form>
            </div>
         </div>
         <!-- header section end -->
</head>

   @yield('footer');



<!-- footer section start -->
 <div class="footer_section">
    <div class="container">
       <div class="input_bt">
          <input type="text" class="mail_bt" placeholder="Enter Your Email" name="Enter your email">
          <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
       </div>
       <div class="footer_section_2">
          <div class="row">
             <div class="col-lg-3 col-sm-6">
                <h3 class="footer_taital">Address</h3>
                <div class="location_main">
                   <ul>
                      <li>
                         <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>
                         <span class="padding_15">Making this the first true</span></a>
                      </li>
                      <li>
                         <a href="#"><i class="fa fa-phone" aria-hidden="true"></i>
                         <span class="padding_15">Call : +01 1234567890</span></a>
                      </li>
                      <li>
                         <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>
                         <span class="padding_15">Email : demo@gmail.com</span></a>
                      </li>
                   </ul>
                </div>
                <div class="footer_social_icon">
                   <ul>
                      <li>
                         <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                      </li>
                      <li>
                         <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                      </li>
                      <li>
                         <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                      </li>
                      <li>
                         <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                      </li>
                   </ul>
                </div>
             </div>
             <div class="col-lg-3 col-sm-6">
                <h3 class="footer_taital">Useful Link</h3>
                <div class="footer_menu">
                   <ul>
                      <li class="active">
                         <a href="index.html">Home</a>
                      </li>
                      <li>
                         <a href="about.html">About</a>
                      </li>

                      <li>
                         <a href="news.html">News</a>
                      </li>
                      <li>
                         <a href="treatment.html">Treatment</a>
                      </li>
                      <li>
                         <a href="contact.html">Contact Us</a>
                      </li>
                   </ul>
                </div>
             </div>
             <div class="col-lg-3 col-sm-6">
                <h3 class="footer_taital">Help & Support</h3>
                <p class="ipsum_text">Opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page</p>
             </div>
             <div class="col-lg-3 col-sm-6">
                <h3 class="footer_taital">News</h3>
                <div class="dryfood_text"><img src="images/img-4.png"><span class="padding_15">Normal distribution</span></div>
                <div class="dryfood_text"><img src="images/img-5.png"><span class="padding_15">Normal distribution</span></div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- footer section end -->
 <!-- copyright section start -->
 <div class="copyright_section">
    <div class="container">
       <p class="copyright_text">2024 All Rights Reserved. Design by <a href="https://html.design"></a> Distribution By <a href="https://themewagon.com">ThemWagons</a></p>
    </div>
 </div>
 <!-- copyright section end -->
 <!-- Javascript files-->
 <script src="js/jquery.min.js"></script>
 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.bundle.min.js"></script>
 <script src="js/jquery-3.0.0.min.js"></script>
 <script src="js/plugin.js"></script>
 <!-- sidebar -->
 <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
 <script src="js/custom.js"></script>
 <!-- javascript -->
 <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
 <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
 <script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap'
    });
 </script>
 <script>
    $('#timepicker').timepicker({
        uiLibrary: 'bootstrap'
    });
 </script>
</body>
</html>
