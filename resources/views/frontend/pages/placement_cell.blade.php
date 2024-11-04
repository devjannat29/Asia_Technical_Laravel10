@extends('master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-secondary">
      <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">Job Placement</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="{{ route('home.index') }}">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0 text-info" style="color: white;">Job Placement Cell</p>
        </div>
      </div>
</div>
<!-- Header End -->
<!--latest news Section-->
@include('frontend.pages.partials.latest_news')
<!--End latest news Section-->
<!--Single-Product-Section-->
<div class="container py-5">
      <div class="row pt-5">
        <div class="col-lg-12">
          <div class="d-flex flex-column text-left mb-3">
            <h1 class="mb-3">Job Placement</h1>
          </div>
          @php
            $about_placement = App\Models\About::find(1);
          @endphp
          <div class="mb-5">
          @if($about_placement && $about_placement->job_placement != '')
            <p> {!! $about_placement->job_placement !!} </p>
          @else
            <p>Nothing available</p>
          @endif
          </div>
        </div>
      </div>
</div>
<!--Single-Product-Section-->

<!--testimonials Section-->
@include('frontend.pages.partials.testimonials')
<!--testimonials Section-->
<!-- Gallery Start -->
<div class="container-fluid pt-5 pb-3">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Job Placement Gallery</span>
          </p>
          <h1 class="mb-4">Special Memories Of Job Placement</h1>
        </div>

        <div class="row portfolio-container">
    @foreach ($placement as $img)
    <div class="col-lg-4 col-md-4 col-4 mb-4 portfolio-item first">
        <div class="position-relative overflow-hidden mb-2">
            <img class="img-fluid w-100" src="{{ asset('public/placementgallery/' . $img->image) }}" alt="" />
            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                <a href="{{ asset('public/placementgallery/' . $img->image) }}" data-lightbox="portfolio">
                    <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                </a>
            </div>
        </div>
    </div>
    @endforeach   
</div>

<div class="your-paginate mt-4">
    {{ $placement->links() }}
</div>
      </div>
    </div>
    <!-- Gallery End -->

    <!-- overses_partner Start -->
    @include('frontend.pages.partials.overses_partner')
    <!-- overses_partner End -->
<!--Start Brand area-->

@endsection