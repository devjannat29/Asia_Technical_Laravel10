@extends('master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-secondary">
      <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">Courses</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="{{ route('home.index') }}">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0 text-info" style="color: white;">{{ $data->name }}</p>
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
            <h1 class="mb-3">{{ $data->name }}</h1>
            <div class="d-flex">
              <p class="mr-3">Duration : {{$data->duration}}</p>
              <p class="mr-3">Registretion Fee : {{$data->Fee}}</p>
            </div>
          </div>
          <div class="mb-5">
                @if ($data->image != '')
                    <img class="img-fluid rounded w-100 mb-4" width="200" src="{{ asset('public/courseimage/' . $data->image) }}" alt="" />
                @endif
            <p>{!! $data->description !!}</p>
          </div>
          <a href="{{$data->link}}" class="btn btn-secondary px-5">Registration Now</a>
        </div>
        <div class="col-lg-4 mt-5 mt-lg-0">
        @include('frontend.pages.partials.sideCourse')
        @include('frontend.pages.partials.hotLine')
        </div>
        
      </div>
      
</div>
<!--Single-Product-Section-->
@endsection