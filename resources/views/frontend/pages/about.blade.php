@extends('master')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-secondary">
      <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">About Us</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="{{ route('home.index') }}">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0 text-info">About Us</p>
        </div>
      </div>
</div>
<!-- Header End -->
<!--latest news Section-->
@include('frontend.pages.partials.latest_news')
<!--End latest news Section-->
<!--Start Wellcome Section-->
@include('frontend.pages.partials.aboutus')
<!--End Wellcome Section-->


<!--Team Section-->
@include('frontend.pages.partials.team')

<!--Team Section-->


<!--testimonials Section-->
@include('frontend.pages.partials.testimonials')
<!--testimonials Section-->

    <!-- overses_partner Start -->
    @include('frontend.pages.partials.overses_partner')
    <!-- overses_partner End -->
@endsection