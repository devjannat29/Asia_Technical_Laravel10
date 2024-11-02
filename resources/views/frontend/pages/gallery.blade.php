@extends('master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-secondary">
      <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">Gallery</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="{{ route('home.index') }}">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0 text-info" style="color: white;">Gallery</p>
        </div>
      </div>
</div>
<!-- Header End -->
<!--latest news Section-->
@include('frontend.pages.partials.latest_news')
<!--End latest news Section-->
<!-- Gallery Start -->
<div class="container-fluid pt-5 pb-3">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Gallery</span>
          </p>
          <h1 class="mb-4">Special Memories about our ATTC</h1>
        </div>

        <div class="row portfolio-container">
          @foreach ($gallery as $img)
          <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
            <div class="position-relative overflow-hidden mb-2">
              <img class="img-fluid w-100" src="{{ asset('public/galleryimage/' . $img->image) }}" alt="" />
              <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                <a href="{{ asset('public/galleryimage/' . $img->image) }}" data-lightbox="portfolio">
                  <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                </a>
              </div>
            </div>
          </div>
          @endforeach   
        </div>
        <div class="your-paginate mt-4">
                {{ $gallery->links() }}
            </div>
      </div>
    </div>
    <!-- Gallery End -->

@endsection