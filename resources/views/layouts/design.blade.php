<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Final Project</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="front_template/assets/img/favicon.png" rel="icon">
  <link href="front_template/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="front_template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="front_template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="front_template/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="front_template/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="front_template/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="front_template/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="front_template/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction - v1.1.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Extratech Final Project</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{url('/')}}" class="active">Home</a></li>
          <li><a href="{{url('about')}}">About</a></li>
          <li><a href="{{url('services')}}">Services</a></li>
          <li><a href="{{url('user/login')}}">Login</a></li>
          <li><a href="{{url('user/register')}}">Register<li>
          <li><a href="{{url('contact')}}">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  @yield('content')


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-3">
            <div class="footer-info">
              <h3>Extratech University</h3>
              
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-3 col-md-3 footer-links">
            <h4>Follow us on </h4>
            <div class="social-links d-flex mt-3">
                <a href="https://www.tiktok.com/@extratechs" target = "blank" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/extratech.au" target = "blank"class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/extratech.np/" target = "blank" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/company/extra-tech/" target = "blank" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
            </div>
          </div><!-- End footer links column-->
          <div class="col-lg-3 col-md-3 footer-links">
            <h4>Contact us on: </h4>
             Email us at : <a href="mailto: info@extratechs.com.au">info@extratechs.com.au</a><br>
                <p> Call us on : 00000012321</p>
          </div>

          <div class="col-lg-3 col-md-3 footer-links">
            <h4>Location</h4>
            <address ><a href = "https://www.google.com.au/maps/place/EXTRATECH/@-33.9666098,151.1039312,17z/data=!3m1!5s0x6b12b9bd3751a199:0xee917e878a4b0dcf!4m13!1m7!3m6!1s0x6b12b9bd39b8e5db:0xb95792a42590004a!2s10+Park+Rd,+Hurstville+NSW+2220!3b1!8m2!3d-33.9666143!4d151.1061199!3m4!1s0x6b12b9a3a1ca51c9:0x60124f35094d0e21!8m2!3d-33.9666143!4d151.1061199" target = "blank">10 Park Road, Hurstville <br>NSW 2220, Sydney Australia </a></address>
               
          </div><!-- End footer links column-->

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Extratech University</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by Sailesh & Smarika
        </div>
      </div>
    </div>
   

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="front_template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="front_template/assets/vendor/aos/aos.js"></script>
  <script src="front_template/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="front_template/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="front_template/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="front_template/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="front_template/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="front_template/assets/js/main.js"></script>

</body>

</html>