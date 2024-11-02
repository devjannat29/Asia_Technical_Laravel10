@extends('admin.admin_dashboard')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Courses</h4>
      </div>
      <div class="d-flex align-items-center flex-wrap text-nowrap">
        <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
          <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
          <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
        </div>
        <a href="{{ route('admin.add_course') }}">
            <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                <i class="btn-icon-prepend" data-feather="download-cloud"></i>
                Add Course
            </button>
        </a>
      </div>
    </div>
    @include('_message')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h6 class="card-title">Courses</h6>
                  <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                      <thead>
                        <tr>
                            <th>Name</th>
                            <th>Registration Fee</th>
                            <th>Duration</th>
                            <th>Category</th>
                            <th width="100">Status</th>
                            <th width="100">Edit</th>
                            <th width="100">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($course as $courses)
                        <tr>
                        <td>{{ $courses->name }}</td>
                            <td>{{ $courses->Fee }}</td>
                            <td>{{ $courses->duration }}</td>
                            <td>{{ $courses->category }}</td>											
                            <td>
                                @if ( $courses->status != 0 )
                                <button type="button" class="btn btn-primary btn-icon" style="width: 40px; height:30px">
	                                <i data-feather="check-square"></i>
                                </button>
                                @else
                                <button type="button" class="btn btn-danger btn-icon"  style="width: 40px; height:30px">
	                                <i data-feather="x-square"></i>
                                </button>
                                @endif
                            </td>
                          <td><a href="{{route('admin.edit_course',$courses->id)}}"><i style="color: green" data-feather="edit"></i></a></td>
                          <td><a href="{{route('admin.delete_course',$courses->id)}}" onclick="showSwal('passing-parameter-execute-cancel')"> <i style="color: red" data-feather="x-circle"></i></a></td>
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