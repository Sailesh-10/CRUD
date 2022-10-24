@extends('layouts.design')
@section('content')
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('front_template/assets/img/aboutus.jpg');">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>About Us</h2>

  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="row position-relative">

      <div class="col-lg-7 about-img" style="background-image: url(front_template/assets/img/about.jpg);"></div>

      <div class="col-lg-7">
        <h2>About Extratech</h2>
        <div class="our-story">
          <h4>Est 1988</h4>
          <h3>Our Story</h3>
          <p>Inventore aliquam beatae at et id alias. Ipsa dolores amet consequuntur minima quia maxime autem. Quidem id sed ratione. Tenetur provident autem in reiciendis rerum at dolor. Aliquam consectetur laudantium temporibus dicta minus dolor.</p>
          <ul>
            <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commo</span></li>
            <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in</span></li>
            <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
          </ul>
          <p>Vitae autem velit excepturi fugit. Animi ad non. Eligendi et non nesciunt suscipit repellendus porro in quo eveniet. Molestias in maxime doloremque.</p>
      </div>

    </div>

  </div>
</section>
<!-- End About Section -->

<!-- ======= Our Team Section ======= -->
<section id="team" class="team">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2>Our Team</h2>
      <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
    </div>
    <div class="row gy-4">
          @foreach ($team as $teamitem)
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card  position-relative" style="width: 19rem;">
              <img src="{{asset('uploads/team/'.$teamitem->image)}}" class="team-img" alt="">
            </div> 
            <h5 class="card-title">{{$teamitem->name}}</h5>
            <span>{{$teamitem->position}}</span>
            <p class="card-text">{{$teamitem->description}}</p>
          </div><!-- End Service Item -->
            @endforeach 
        </div> 
      </div>
    </section><!-- End Services Section -->
    

</main><!-- End #main -->
@endsection