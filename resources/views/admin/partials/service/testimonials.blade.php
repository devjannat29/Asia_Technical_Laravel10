@extends('admin.admin_dashboard')

@section('admin')

<style>
    .testimonial-text {
    max-width: 250px; /* Adjust the width as needed */
    height: 60px; /* Adjust the height as needed */
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 3; /* Limits to 3 lines */
    -webkit-box-orient: vertical;
}
</style>

<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Testimonial</h4>
      </div>
      <div class="d-flex align-items-center flex-wrap text-nowrap">
        <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
          <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
          <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
        </div>
      </div>
    </div>
    @include('_message')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title mb-3" style="font-size: large;">Add Student Testimonial</h6>
                <form class="forms-sample" action="{{ route('admin.upload_testimonials') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="description" class="form-label" >Student Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Department</label>
                        <input type="text" name="department" id="name" class="form-control" placeholder="Department" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Short Description</label>
                        <textarea name="short_desc" cols="10" rows="3" class=" form-control" placeholder="Description" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h6 class="card-title">Testimonials</h6>
                  <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                      <thead>
                        <tr>
                            <th width="100">Name</th>
                            <th width="100">Short Description</th>
                            <th width="100">Department</th>
                            <th width="100">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($testimonial as $testimonials)
                        <tr>
                            <td>{{ $testimonials->name }}</td>												
                            <td>{{ $testimonials->department }}</td>										
                            <td style="white-space: normal; width: 350px;">
                                <div style="overflow-wrap: break-word;">
                                    {!! $testimonials->short_desc !!}
                                </div>
                            </td>										
                            <td><a href="{{ route('admin.delete_testimonials',$testimonials->id) }}" onclick="showSwal('passing-parameter-execute-cancel')"> <i style="color: red" data-feather="x-circle"></i></a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </div>
    </div>

</div>

@endsection