@extends('master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-secondary">
      <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">Course Category</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="{{ route('home.index') }}">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0 text-info" style="color: white;">{{ $courseCat->name }}</p>
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
            <h1 class="mb-3">{{ $courseCat->name }}</h1>
          </div>
          <div class="mb-5">
                @if ($courseCat->image != '')
                    <img class="img-fluid rounded w-100 mb-4" width="200" src="{{ asset('public/categoryimage/' . $courseCat->image) }}" alt="" />
                @endif
            <p>{!! $courseCat->description !!}</p>
          </div>
        </div>
        <div class="col-lg-4 mt-5 mt-lg-0">
        @include('frontend.pages.partials.sideCourse')
        @include('frontend.pages.partials.hotLine')
        </div>
      </div>
</div>
<!--Single-Product-Section-->
<div class="container-fluid pt-5">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Related Courses</span>
          </p>
          <h1 class="mb-4">Courses We Offered</h1>
        </div>
        <div class="row">
        @foreach ($data as $catCourse)
        @if ($catCourse != '')
          <div class="col-lg-4 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
              @if ($catCourse->image != '')
                <img class="card-img-top mb-2" width="200" src="{{ asset('public/courseimage/' . $catCourse->image) }}" alt="" />
              @endif
             
              <div class="card-body text-center">
                <a href="{{ route('home.course_details',$catCourse->id) }}">
                <h4 class="card-title m-0">{{$catCourse->name}}</h4>
                </a>
              </div>
              <div class="card-footer bg-transparent py-4 px-5">
                <div class="row border-bottom">
                  <div class="col-12 py-1">Course Duration: {{$catCourse->duration}}</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-12 py-1">Registration Fee: {{$catCourse->Fee}}</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-12 py-1">Course Category: {{$catCourse->category}}</div>
                </div>
              </div>
              <a href="{{$catCourse->link}}" class="btn btn-primary px-4 mx-auto mb-4">Registretion Now</a>
            </div>
          </div>
          @endif
          @endforeach
        </div>
      </div>
</div>

@endsection