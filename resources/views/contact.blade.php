@extends('header')
@section('header')
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <h1 class="contact_taital">Get In Touch</h1>
                     <form action="">
                        <div class="mail_section_1">
                           <input type="text" class="mail_text" placeholder="Name" name="Name">
                           <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number"> 
                           <input type="text" class="mail_text" placeholder="Email" name="Email">
                           <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                           <div class="send_bt"><a href="#">SEND</a></div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-6 padding_left_15">
                     <div class="map_main">
                        <div class="map-responsive">
                           <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="600" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
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
                           <li>
                              <a href="index.html">Home</a>
                           </li>
                           <li>
                              <a href="about.html">About</a>
                           </li>
                           <li>
                              <a href="doctors.html">Doctors</a>
                           </li>
                           <li>
                              <a href="news.html">News</a>
                           </li>
                           <li>
                              <a href="treatment.html">Treatment</a>
                           </li>
                           <li class="active">
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
            <p class="copyright_text">2024 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a> Distribution By <a href="https://themewagon.com">ThemWagons</a></p>
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



@endsection