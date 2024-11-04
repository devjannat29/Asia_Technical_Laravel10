@extends('master')

@section('content')
<style>
    .carousel-caption {
        top: 20%; /* Default position */
    }
    @media (max-width: 768px) {
        .carousel-caption {
            bottom: 20%; /* Slightly raise on medium screens */
        }
        .carousel-caption h1 {
            font-size: 1.5rem;
        }
        .carousel-caption p {
            font-size: 0.9rem;
        }
    }
    @media (max-width: 576px) {
        .carousel-caption {
            padding-bottom: 1rem; /* Add padding to prevent clipping */
            text-align: center;
        }
        .carousel-caption .image img {
            width: 40px; /* Smaller logo for extra small screens */
        }
        .carousel-caption h1 {
            font-size: 1rem; /* Smaller heading font */
        }
        .carousel-caption p {
            font-size: 0.4rem; /* Smaller paragraph font */
        }
    }
</style>
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
  <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
          <!-- First Slide -->
          <div class="carousel-item active ">
            <div class="image-container">
              <img class="w-100" src="{{ asset('public/frontsite/img/campas.jpg') }}" alt="Attc">
              <div style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;background: linear-gradient(rgba(35, 38, 49, 0.7), rgba(35, 38, 49, 0.7));"></div>
            </div>
              <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                            <div class="image">
                              <img width="100" src="{{ asset('public/frontsite/img/logo.png') }}" alt="Logo" class="responsive-img">
                            </div>
                              <h1 class="display-8 text-white animated slideInDown text-center ">
                                Asia Technical Training Center  
                              </h1>
                              <p class="fs-5 pb-2 mx-sm-5 animated slideInDown ">
                                Registered Training Organization - Bangladesh Technical Education Board (BTEB)
                              </p>
                              <a href="#" class="btn btn-primary explore-btn animated slideInDown d-none d-sm-inline-block px-5">Contact Us</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Add more slides if needed -->
      </div>
  </div>
</div>
<!-- Carousel End -->
<!-- Carousel Start -->

<!-- Carousel End -->
<!--latest news Section-->
@include('frontend.pages.partials.latest_news')
<!--End latest news Section-->
<!-- About Start -->
@include('frontend.pages.partials.aboutus')
<!-- About End -->

    <!-- Facilities Start -->
    <div class="container-fluid pt-5">
      <div class="container pb-3">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Services</span>
          </p>
          <h1 class="mb-4">Your Vision, Our Expertise</h1>
        </div>
        <div class="row">
          @foreach ($latestservice as $service)
          @if ($service->status != '0')
          <div class="col-lg-4 col-md-6 pb-1">
            <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
              <div class="pl-4">
                <a href="{{ route('home.service_details', $service->id ) }}"><h4>{{ $service->name }}</h4></a>
                
                <h4 class="service" >
                  {!! Str::words($service->description, 40, '......') !!}
                </h4>
              </div>
            </div>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>
    <!-- Facilities Start -->

    

    <!-- Class Start -->
    @include('frontend.pages.partials.course')
    
    <!-- Class End -->

    <!-- Registration Start -->
    <!-- <div class="container-fluid py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 mb-5 mb-lg-0">
            <p class="section-title pr-5">
              <span class="pr-2">Book A Seat</span>
            </p>
            <h1 class="mb-4">Book A Seat For Your Kid</h1>
            <p>
              Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo
              dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.
              Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
              dolor
            </p>
            <ul class="list-inline m-0">
              <li class="py-2">
                <i class="fa fa-check text-success mr-3"></i>Labore eos amet
                dolor amet diam
              </li>
              <li class="py-2">
                <i class="fa fa-check text-success mr-3"></i>Etsea et sit dolor
                amet ipsum
              </li>
              <li class="py-2">
                <i class="fa fa-check text-success mr-3"></i>Diam dolor diam
                elitripsum vero.
              </li>
            </ul>
            <a href="" class="btn btn-primary mt-4 py-2 px-4">Book Now</a>
          </div>
          <div class="col-lg-5">
            <div class="card border-0">
              <div class="card-header bg-secondary text-center p-4">
                <h1 class="text-white m-0">Book A Seat</h1>
              </div>
              <div class="card-body rounded-bottom bg-primary p-5">
                <form>
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control border-0 p-4"
                      placeholder="Your Name"
                      required="required"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="email"
                      class="form-control border-0 p-4"
                      placeholder="Your Email"
                      required="required"
                    />
                  </div>
                  <div class="form-group">
                    <select
                      class="custom-select border-0 px-4"
                      style="height: 47px"
                    >
                      <option selected>Select A Class</option>
                      <option value="1">Class 1</option>
                      <option value="2">Class 1</option>
                      <option value="3">Class 1</option>
                    </select>
                  </div>
                  <div>
                    <button
                      class="btn btn-secondary btn-block border-0 py-3"
                      type="submit"
                    >
                      Book Now
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Registration End -->

    <!-- Team Start -->
    @include('frontend.pages.partials.team')
    
    <!-- Team End -->

    <!-- Testimonial Start -->
    @include('frontend.pages.partials.testimonials')
    
    <!-- Testimonial End -->

    <!-- Blog Start -->
    @include('frontend.pages.partials.blog')
    <!-- Blog End -->

    <!-- overses_partner Start -->
    @include('frontend.pages.partials.overses_partner')
    <!-- overses_partner End -->
@endsection