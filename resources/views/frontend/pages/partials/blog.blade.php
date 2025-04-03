
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
                <img class="card-img-top mb-2" src="{{ asset('public/eventimage/'.$events->image) }}" alt="">
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