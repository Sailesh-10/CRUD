@extends('layouts.design')
@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    
  @php $i=1; @endphp 
    @foreach ($slider as $slideritem)
    <div class="carousel-item {{ $i=='1'? 'active':'' }}">
      @php $i++; @endphp
      <img src="{{asset('uploads/slider/'.$slideritem->image)}}" class="d-block w-100" style = "height:600px";  alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>{{$slideritem->title}}</h5>
        <p>{{$slideritem->description}}</p>
      
      </div>
    </div>
    @endforeach 
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Services</h2>
          <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p>
        </div>

        <div class="row gy-4">
           @foreach ($service as $serviceitem)
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
            <img src="{{asset('uploads/icon/'.$serviceitem->image)}}" class="service-img" alt="">
              <h3>{{$serviceitem->title}}</h3>
              <p>{{$serviceitem->description}}</p>
              <a href="{{url('/services')}}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->
            @endforeach 
        </div> 
      </div>
    </section><!-- End Services Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
        </div>

        <div class="slides-2 swiper">
          <div class="swiper-wrapper">
          @foreach ($testimonial as $testimonialitem)
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('uploads/testimonial/'.$testimonialitem->image)}}" class="testimonial-img" alt="">
                  <h3>{{$testimonialitem->name}}</h3>
                  <h4>{{$testimonialitem->position}}</h4>
                  <h4>{{$testimonialitem->company}}</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    {{$testimonialitem->testimonial}}
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->
  </main><!-- End #main -->

  @endsection