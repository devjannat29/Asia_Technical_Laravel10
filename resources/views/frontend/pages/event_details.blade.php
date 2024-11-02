
@extends('master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-secondary">
      <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">Event Details</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="{{ route('home.index') }}">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0 text-info" style="color: white;">{{ $events->title }}</p>
        </div>
      </div>
</div>
<!-- Header End -->
<!--latest news Section-->
@include('frontend.pages.partials.latest_news')
<!--End latest news Section-->



<div class="container-fluid py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5">
         @if ($events->image != '')
          <img class="img-fluid rounded mb-5 mb-lg-0" width="400px" height="400" src="{{ asset('public/eventimage/' . $events->image) }}" alt="" />
          @endif
      </div>
      <div class="col-lg-7">
        <h1 class="mb-4">{{ $events->title }}</h1>
        <div class="d-flex">
          <p class="mr-3">Date : {{ $events->date }}</p>
        </div>
        <p>{!! $events->description !!}</p>
      </div>
    </div>
  </div>
</div>

@endsection