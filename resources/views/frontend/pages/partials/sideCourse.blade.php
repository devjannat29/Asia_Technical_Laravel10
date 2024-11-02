<div class="mb-5">
    <h4 class="mb-2">Course Categories</h4>
    <ul class="list-group list-group-flush">
         @foreach ($course as $courses)
            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                <a href="{{ route('home.course_category_details', $courses->id ) }}">{{ $courses->name }}</a>
            </li>
        @endforeach
    </ul>
</div>