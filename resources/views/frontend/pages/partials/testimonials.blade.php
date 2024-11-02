<div class="container-fluid py-5">
      <div class="container p-0">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Testimonial</span>
          </p>
          <h1 class="mb-4">What our Student says</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
          @foreach ($testimonial as $testimonials)
          @if ($testimonials != '')
          <div class="testimonial-item px-3">
            <div class="bg-light shadow-sm rounded mb-4 p-4">
              <h3 class="fas fa-quote-left text-primary mr-3"></h3>
              {!! $testimonials->short_desc !!}
            </div>
            <div class="d-flex align-items-center">
              <div class="pl-3">
                <h5>{{ $testimonials->name }}</h5>
                <i>{{ $testimonials->department }}</i>
              </div>
            </div>
          </div>
          @endif   
          @endforeach
        </div>
      </div>
</div>
