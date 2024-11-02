@extends('admin.admin_dashboard')

@section('admin')

<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Add Service</h4>
      </div>
      <div class="d-flex align-items-center flex-wrap text-nowrap">
        <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
          <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
          <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
        </div>
        <a href="{{ route('admin.view_service') }}">
            <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                <i class="btn-icon-prepend" data-feather="download-cloud"></i>
                Back
            </button>
        </a>
      </div>
    </div>
    @include('_message')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title mb-3" style="font-size: large;">Add Service</h6>
                <form class="forms-sample" action="{{ route('admin.upload_service') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="description" class="form-label" >Service Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label" >Slug</label>
                        <input type="text" name="slug" id="price" class="form-control" placeholder="slug" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="summernote" cols="30" rows="10" class=" form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label" >Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="{{ route('admin.view_service') }}" class="btn btn-secondary">Cancel</a>
                </form>
          </div>
        </div>
    </div>

</div>
@endsection