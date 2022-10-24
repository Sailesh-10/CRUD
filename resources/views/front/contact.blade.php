@extends('layouts.design')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('front_template/assets/img/contact.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Contact</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-map"></i>
              <h3>Our Address</h3>
              <p><address ><a href = "https://www.google.com.au/maps/place/EXTRATECH/@-33.9666098,151.1039312,17z/data=!3m1!5s0x6b12b9bd3751a199:0xee917e878a4b0dcf!4m13!1m7!3m6!1s0x6b12b9bd39b8e5db:0xb95792a42590004a!2s10+Park+Rd,+Hurstville+NSW+2220!3b1!8m2!3d-33.9666143!4d151.1061199!3m4!1s0x6b12b9a3a1ca51c9:0x60124f35094d0e21!8m2!3d-33.9666143!4d151.1061199" target = "blank">10 Park Road, Hurstville <br>NSW 2220, Sydney Australia </a></address></p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p><a href="mailto: info@extratechs.com.au">info@extratechs.com.au</a></p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @endsection