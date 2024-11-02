@extends('master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-secondary">
      <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">Service</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="{{ route('home.index') }}">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0 text-info" style="color: white;">{{ $service->name }}</p>
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
          <div class="d-flex flex-column text-left mb-3">
            <h1 class="mb-3">{{ $service->name }}</h1>
          </div>
          <div class="mb-5">
            <p>{!! $service->description !!}</p>
          </div>
        </div>
        @include('frontend.pages.partials.hotLine')
      </div>
</div>
<!--Single-Product-Section-->
@endsection