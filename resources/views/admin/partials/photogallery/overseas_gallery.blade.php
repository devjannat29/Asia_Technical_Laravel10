

@extends('admin.admin_dashboard')

@section('admin')
<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Overseas Gallery</h4>
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
            <h6 class="card-title mb-3" style="font-size: large;">Add Pictures</h6>
                <form class="forms-sample" action="{{ route('admin.upload_overseas_gallery') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="description" class="form-label" >Overseas Partner Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>	
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Images (Only jpg,jpeg,png,webp)</label>
                        <input type="file" class="form-control" name="image" required>
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
                  <h6 class="card-title">Overseas Gallery</h6>
                  <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                      <thead>
                        <tr>
                            <th width="100">Overseas Partner Name</th>
                            <th width="100">Image</th>
                            <th width="100">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($data as $img)
                        <tr>
                            <td>{{$img->name}}</td>									
                            <td>
                                <img src="{{ asset('public/overseasgallery/'.$img->image) }}" class="img-thumbnail" width="150" >
                            </td>								
                            <td><a href="{{route('admin.delete_overseas_gallery',$img->id)}}" onclick="showSwal('passing-parameter-execute-cancel')"> <i style="color: red" data-feather="x-circle"></i></a></td>
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