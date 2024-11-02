<div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
      <div class="row pt-5">
        <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
          <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0" style="font-size: 40px; line-height: 40px">
          <img src="{{ asset('public/frontsite/img/logo-2.png') }} " alt="" width="250">
          </a>
          <p style="color: white;">
          The organization was founded with a view to provide training to unemployed peoples to get the employment local and overseas.
          </p>
          @php
            $setting = App\Models\Setting::find(1);
          @endphp
          @if($setting && $setting->fb_url != '' && $setting->gm_url != '' && $setting->in_url != '')
          <div class="d-flex justify-content-start mt-4">
            @if ($setting->gm_url != '')
            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px" href="{{$setting->gm_url}}"><i class="fa fa-envelope"></i></a>
            @else
	            <p>not available</p>
            @endif
            @if ($setting->fb_url != '')
            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px" href="{{$setting->fb_url}}"><i class="fab fa-facebook-f"></i></a>
            @else
	            <p>not available</p>
            @endif
            @if ($setting->in_url != '')
            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px" href="{{$setting->in_url}}"><i class="fab fa-instagram"></i></a>
            @else
	            <p>not available</p>
            @endif
          </div>
          @else
	          <p>not available</p>
          @endif
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-5">
          <h3 class="text-primary mb-4">Get In Touch</h3>
          @php
            $setting = App\Models\Setting::find(1);
          @endphp
          <div class="d-flex">
            <h4 class="fa fa-map-marker-alt text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Address</h5>
              @if($setting && $setting->address != '')
                <p style="color: white;">{{$setting->address}}</p>
              @else
	              <p>not available</p>
              @endif
            </div>
          </div>
          <div class="d-flex">
            <h4 class="fa fa-envelope text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Email</h5>
              @if($setting && $setting->gmail != '')
                <p style="color: white;">{{$setting->gmail}}</p>
              @else
	                <p>not available</p>
              @endif
            </div>
          </div>
          <div class="d-flex">
            <h4 class="fa fa-phone-alt text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Phone</h5>
              @if($setting && $setting->phone != '')
                <p style="color: white;">{{$setting->phone}}</p>
              @else
	                <p>not available</p>
              @endif
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 mb-5">
          <h3 class="text-primary mb-4">Quick Links</h3>
          <div class="d-flex flex-column justify-content-start">
            <a class="text-white mb-2" href="#"
              ><i class="fa fa-angle-right mr-2"></i>Home</a
            >
            <a class="text-white mb-2" href="#"
              ><i class="fa fa-angle-right mr-2"></i>About Us</a
            >
            <a class="text-white mb-2" href="#"
              ><i class="fa fa-angle-right mr-2"></i>Our Classes</a
            >
            <a class="text-white mb-2" href="#"
              ><i class="fa fa-angle-right mr-2"></i>Our Teachers</a
            >
            <a class="text-white mb-2" href="#"
              ><i class="fa fa-angle-right mr-2"></i>Our Blog</a
            >
            <a class="text-white" href="#"
              ><i class="fa fa-angle-right mr-2"></i>Contact Us</a
            >
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-5">
          <h3 class="text-primary mb-4">Up Coming Interviews</h3>
          <div class="d-flex flex-column justify-content-start">
          @foreach ($latest_interview as $doc)
          @if ($doc != "")
          <a class="text-white mb-2" href="{{route('home.interview')}}"><i class="fa fa-angle-right mr-2"></i>{{ $doc->title }}</a>
          @endif 
          @endforeach
          </div>
        </div>

      </div>
      <div
        class="container-fluid pt-5"
        style="border-top: 1px solid rgba(23, 162, 184, 0.2) ;">
        <p class="m-0 text-center text-white">
          &copy; All Rights Reserved. Designed & Devoloped by
          <a class="text-primary font-weight-bold" href="https://www.linkedin.com/in/nurjannat29/">Nur Jannat</a>
        </p>
      </div>
    </div>