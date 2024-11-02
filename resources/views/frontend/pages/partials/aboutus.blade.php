<div class="container-fluid py-5">
  <div class="container">
  @php
    $about = App\Models\About::find(1);
  @endphp
    <div class="row align-items-center">
      <div class="col-lg-5">
      @if($about && $about->image != '')
         <img class="img-fluid rounded mb-5 mb-lg-0" src="public/about/{{$about->image}}" alt="">
      @else
        <p>No image available</p>
      @endif
      </div>
      <div class="col-lg-7">
        <p class="section-title pr-5">
          <span class="pr-2">Learn About Us</span>
        </p>
        <h1 class="mb-4">Welcome to ATTC</h1>
        @if($about && $about->about_desc != '')
          <p>{!! $about->about_desc !!}</p>
        @else
          <p>Nothing available</p>
        @endif
        <a href="" class="btn btn-primary mt-2 py-2 px-4">About More</a>
      </div>
    </div>
  </div>
</div>