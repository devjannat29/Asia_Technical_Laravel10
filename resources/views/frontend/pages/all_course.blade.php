@extends('master')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-secondary">
      <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">All Courses</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="{{ route('home.index') }}">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0 text-info">All Courses</p>
        </div>
      </div>
</div>
<!-- Header End -->
<!--latest news Section-->
@include('frontend.pages.partials.latest_news')
<!--End latest news Section-->
<!-- Class Start -->
<div class="container-fluid pt-5">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">All Courses</span>
          </p>
          <h1 class="mb-4">Courses We Offered</h1>
        </div>
        <div class="row">
        @foreach ($allcourses as $data)
          @if ($data->status != '0')
          <div class="col-lg-4 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
              @if ($data->image != '')
                <img class="card-img-top mb-2" src="public/courseimage/{{$data->image}}" alt="" />
              @endif
              
              <div class="card-body text-center">
                <a href="{{ route('home.course_details',$data->id) }}}">
                <h4 class="card-title">{{$data->name}}</h4>
                </a>
              </div>
              <div class="card-footer bg-transparent py-4 px-5">
                <div class="row border-bottom">
                  <div class="col-12 py-1">Course Duration: {{$data->duration}}</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-12 py-1">Registration Fee: {{$data->Fee}}</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-12 py-1">Course Category: {{$data->category}}</div>
                </div>
              </div>
              <a href="{{$data->link}}" class="btn btn-primary px-4 mx-auto mb-4">Registretion Now</a>
            </div>
          </div>
          @endif
          @endforeach
        </div>
        <div class="your-paginate mt-4">
            {{ $allcourses->links() }}
        </div> 
      </div>
    </div>
    <!-- Class End -->


@endsection