@extends('master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-secondary">
      <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">All Events</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="{{ route('home.index') }}">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0 text-info">Events</p>
        </div>
      </div>
</div>
<!-- Header End -->
<!--latest news Section-->
@include('frontend.pages.partials.latest_news')
<!--End latest news Section-->

<div class="container-fluid pt-5">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Our Recent Events</span>
          </p>
          <h1 class="mb-4">Special Memories about our ATTC on Way to Reach a Milestone.</h1>
        </div>
        <div class="row pb-3">
          @foreach ($event as $events)
          <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm mb-2">
              @if ($events->image != '')
                <img class="card-img-top mb-2" src="{{ asset('public/eventimage/' . $events->image) }}" alt="">
              @endif
              <div class="card-body bg-light text-center p-4">
                <h4 class="">{{ $events->title }}</h4>

                <a href="{{route('home.event_details', $events->id)}}" class="btn btn-primary px-4 mx-auto my-2">Read More</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
</div>

@endsection