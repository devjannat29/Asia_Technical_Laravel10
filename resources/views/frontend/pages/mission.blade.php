@extends('master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-secondary">
      <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">About Us</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="{{ route('home.index') }}">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0 text-info" style="color: white;">Mission & Vission</p>
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
        <div class="col-lg-8">
        @php
            $about = App\Models\About::find(1);
        @endphp
          <div class="d-flex flex-column text-left mb-3">
            <h1 class="mb-3">Our Mission</h1>
          </div>
          <div class="mb-5">
            @if($about && $about->mission != '')
                <p>{!! $about->mission !!}<p>
            @else
                <p>Nothing available</p>
            @endif
          </div>

          <div class="d-flex flex-column text-left mb-3">
            <h1 class="mb-3">Our Vission</h1>
          </div>
          <div class="mb-5">
            @if($about && $about->vission != '')
                <p>{!! $about->vission !!}<p>
            @else
                <p>Nothing available</p>
            @endif
          </div>
        </div>
        @include('frontend.pages.partials.hotLine')
      </div>
</div>
<!--Single-Product-Section-->

@endsection