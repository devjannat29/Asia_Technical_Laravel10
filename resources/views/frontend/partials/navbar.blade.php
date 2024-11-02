<!-- Topbar Start -->
<div class="container-fluid bg-secondary text-white-50 py-2 px-0 d-none d-lg-block my-0" style="overflow: hidden;">
      <div class="row gx-0 align-items-center">
            @php
               $setting = App\Models\Setting::find(1);
            @endphp
          <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center me-4 text-white">
              <small>ADDRESS:
              @if($setting && $setting->address != '')
                <small style="font-size: 14px">{{$setting->address}}</small>

              @endif
              </small>
            </div>
          </div>
          <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center me-4 text-white">
              <small>PHONE:
              @if($setting && $setting->phone != '')
                <small style="font-size: 14px">{{$setting->phone}}</small>

             @endif
              </small>
            </div>
          </div>
          
      </div>
</div>
  <!-- Topbar End -->
    <!-- Navbar Start -->
    <div class="container-fluid bg-light bg-info sticky-top shadow">
      <nav
        class="navbar navbar-expand-lg bg-light navbar-light  py-3 py-lg-0 px-0 px-lg-5 " >
        <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px">
          <img src="{{ asset('public/frontsite/img/logo copy.png') }} " alt="" width="250">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
          <div class="navbar-nav font-weight-bold mx-auto py-0">
            <a href="{{ route('home.index') }}" class="nav-item nav-link active">Home</a>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About</a>
              <div class="dropdown-menu rounded-0 m-0">
                <a href="{{ route('home.about_us') }}" class="dropdown-item">About Us</a>
                <a href="{{ route('home.mission') }}" class="dropdown-item">Mission & Vission</a>
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Service</a>
              <div class="dropdown-menu rounded-0 m-0">
              @foreach ($latestservice as $services)
              @if ($services->status != '0')
                <a href="{{ route('home.service_details', $services->id ) }}" class="dropdown-item">{{$services->name }}</a>
              @endif
              @endforeach
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Course</a>
              <div class="dropdown-menu rounded-0 m-0">
              <a href="{{ route('home.all_course') }}" class="dropdown-item">All Courses</a>
                @foreach ($course as $courses)
                    <a href="{{ route('home.course_category_details', $courses->id ) }}" class="dropdown-item">{{$courses->name }}</a>
                @endforeach
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Job Placement </a>
              <div class="dropdown-menu rounded-0 m-0">
                <a href="{{ route('home.placement_cell') }}" class="dropdown-item">Job Placement Cell</a>
                <a href="{{ route('home.job') }}" class="dropdown-item">Job Circular</a>
                <a href="{{ route('home.interview') }}" class="dropdown-item">Up Comming Interview</a>
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Academic</a>
              <div class="dropdown-menu rounded-0 m-0">
                <a href="{{ route('home.teachers') }}" class="dropdown-item">Teachers Information</a>
                <a href="{{ route('home.students') }}" class="dropdown-item">Student Information</a>
                <a href="{{ route('home.notice') }}" class="dropdown-item">Notice</a>
                <a href="{{ route('home.gallery') }}" class="dropdown-item">Gallery</a>
              </div>
            </div>
            <a href="{{ route('home.event') }}" class="nav-item nav-link">Events</a>
            <a href="{{ route('home.contact') }}" class="nav-item nav-link">Contact Us</a>
          </div>
        </div>
      </nav>
    </div>
    <!-- Navbar End -->