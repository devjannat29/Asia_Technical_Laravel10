<div class="container-fluid py-5">
      <div class="container p-0">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Overses Partnets</span>
          </p>
        </div>
        <div class="logos">
            <div class="logo_items">
            @foreach ($overses_gallery as $overses)
            <a class="tool_tip" title="{{$overses->name}}" href="#">
                <img src="public/overseasgallery/{{$overses->image}}">
            </a>
            @endforeach
            </div>
            <div class="logo_items">
            @foreach ($overses_gallery as $overses)
            <a class="tool_tip" title="{{$overses->name}}" href="#">
              <img src="public/overseasgallery/{{$overses->image}}">
            </a>
            @endforeach
            </div>
        </div>

      </div>
</div>

