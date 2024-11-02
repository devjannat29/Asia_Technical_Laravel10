@extends('admin.admin_dashboard')

@section('admin')
<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Manegment Members</h4>
      </div>
      <div class="d-flex align-items-center flex-wrap text-nowrap">
        <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
          <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
          <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
        </div>
        <a href="{{ route('admin.add_member') }}">
            <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                <i class="btn-icon-prepend" data-feather="download-cloud"></i>
                Add Member
            </button>
        </a>
      </div>
    </div>
    @include('_message')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h6 class="card-title">Services</h6>
                  <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                      <thead>
                        <tr>
                            <th>Image</th>
                            <th width="100">Name</th>
                            <th>Designation</th>
                            <th>Department</th>
                            <th>Stutas</th>
                            <th>Add Managment</th>
                            <th width="100">Edit</th>
                            <th width="100">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($member as $members)
                        <tr>
                            <td>
                                <img src="{{ asset('public/memberimage/'.$members->image) }}" class="img-thumbnail" width="50" >
                            </td>
                            <td>{{$members->name}}</td>
                            <td>{{$members->designation}}</td>
                            <td>{{$members->department}}</td>									
                            <td>
                                @if ( $members->status != 0 )
                                <span class="badge bg-primary">Active</span>
                                @else
                                <span class="badge bg-danger">Block</span>
                                @endif
                            </td>
                            <td>
                                @if ( $members->add_menegment != 0 )
                                <span class="badge bg-success">Added</span>
                                @else
                                <span class="badge bg-danger">Not Added</span>
                                @endif
                            </td>
                          <td><a href="{{route('admin.edit_member',$members->id)}}"><i style="color: green" data-feather="edit"></i></a></td>
                          <td><a href="{{route('admin.delete_member',$members->id)}}" onclick="showSwal('passing-parameter-execute-cancel')"> <i style="color: red" data-feather="x-circle"></i></a></td>
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