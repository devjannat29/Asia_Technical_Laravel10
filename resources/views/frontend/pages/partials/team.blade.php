<div class="container-fluid pt-5">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Our Faculties & Management</span>
          </p>
          <h1 class="mb-4">Making Together on Way to Reach a Future Milestone.</h1>
        </div>
        <div class="row">
          @foreach ($manegment as $team)
          @if ($team->add_menegment != '0')
          <div class="col-md-6 col-lg-3 col-sm-2 text-center team mb-5">
            <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
              @if ($team->image != '')
                <img class="img-fluid w-100" src="public/memberimage/{{$team->image}}" alt="">
              @endif
              @if ($team->fb_url != '' || $team->gm_url != '' || $team->in_url != '')
              <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                @if ($team->gm_url != '')
                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="{{ $team->gm_url }}"><i class="fa fa-envelope"></i></a>
                @endif
                @if ($team->fb_url != '')
                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="{{ $team->fb_url }}"><i class="fab fa-facebook-f"></i></a>
                @endif
                @if ($team->in_url != '')
                <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="{{ $team->in_url }}"><i class="fab fa-instagram"></i></a>
                @endif
              </div>
              @endif
            </div>
            <h4>{{ $team->name }}</h4>
            <i>{{ $team->designation }}</i>
          </div>
          @endif
          @endforeach
        </div>
    </div>
</div>