@extends('master')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-secondary">
      <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">Job Circular</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="{{ route('home.index') }}">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0 text-info" style="color: white;">Job Circular</p>
        </div>
      </div>
</div>
<!-- Header End -->
<!--latest news Section-->
@include('frontend.pages.partials.latest_news')
<!--End latest news Section-->


<!-- Gallery Start -->
<div class="container-fluid pt-5 pb-3">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Job Circular</span>
          </p>
          <h1 class="mb-4">Jobs We Offer</h1>
        </div>
        <div class="row">
          <div class="col-12 text-center mb-2">
            <ul class="list-inline mb-4" id="portfolio-flters">
                <a href="{{ route('home.job') }}">
                <li class="btn btn-outline-primary m-1 active">
                All
                </li>
                </a>
                @foreach ($job_categories as $job_cat)
                <a href="{{ route('home.job' , ['category' => $job_cat->category_title] ) }}">
                    <li class="btn btn-outline-primary m-1" data-filter=".first">
                    {{ $job_cat->category_title }}
                    </li>
                </a>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="card">
            <div class="card-body table-responsive p-0">								
                <table class="table table-hover text-nowrap" style="color: black">
                    <thead>
                        <tr>
                            <th width="100"></th>
                            <th width="100">Title</th>
                            <th width="100">Document</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($job as $jobItem)

                        <tr>
                            <td>{{ $jobItem->category }}</td>	
                            <td>{{ $jobItem->job_title }}</td>	
                            <td>
                                <a class="btn btn-primary" href="{{ route('admin.download_job_circular',$jobItem->id) }}">View Document</a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>										
            </div>
        </div>

      </div>
    </div>
    <!-- Gallery End -->
    <div class="your-paginate mt-4">
    {{ $job->links() }}
</div>
@endsection