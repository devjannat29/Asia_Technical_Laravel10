<div class="container-fluid pt-5">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Latest Courses</span>
          </p>
          <h1 class="mb-4">Courses We Offered</h1>
        </div>
        <div class="row">
          @foreach ($latestCourse as $course)
          @if ($course->status != '0')
          <div class="col-lg-4 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
              @if ($course->image != '')
                <img class="card-img-top mb-2" src="public/courseimage/{{$course->image}}" alt="" />
              @endif
              
              <div class="card-body text-center">
                <a href="{{ route('home.course_details',$course->id) }}">
                <h4 class="card-title">{{$course->name}}</h4>
                </a>
              </div>
              <div class="card-footer bg-transparent py-4 px-5">
                <div class="row border-bottom">
                  <div class="col-12 py-1">Course Duration: {{$course->duration}}</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-12 py-1">Registration Fee: {{$course->Fee}}</div>
                </div>
                <div class="row border-bottom">
                  <div class="col-12 py-1">Course Category: {{$course->category}}</div>
                </div>
              </div>
              <a href="{{$course->link}}" class="btn btn-primary px-4 mx-auto mb-4">Registretion Now</a>
            </div>
          </div>
          @endif
          @endforeach
        </div>
        <a href="{{route('home.all_course')}}" class="btn btn-secondary mt-2 py-2 px-5">All Courses</a>
      </div>
</div>