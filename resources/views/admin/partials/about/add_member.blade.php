@extends('admin.admin_dashboard')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Add Member</h4>
      </div>
      <div class="d-flex align-items-center flex-wrap text-nowrap">
        <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
          <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
          <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
        </div>
        <a href="{{ route('admin.view_member') }}">
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
            <h6 class="card-title mb-3" style="font-size: large;">Add Member</h6>
                <form class="forms-sample" action="{{ route('admin.upload_member') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="description" class="form-label" >Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Designation</label>
                        <input type="text" name="designation" class="form-control" placeholder="Designation" required>
                    </div>
                    <div class="mb-3">
                        <label for="education" class="form-label" >Education Qualification</label>
                        <input type="text" name="education" id="name" class="form-control" placeholder="Education Qualification" >
                    </div>
                    <div class="mb-3">
                        <label for="department" class="form-label">Department of Work</label>
                        <input type="text" name="department" id="name" class="form-control" placeholder="Department of Work">
                    </div>
                    <h4 class="mb-3">Social Link (For Managment Members)</h4>
                    <div class="mb-3">
                        <label for="facebook" class="form-label">Facebook</label>
                        <input type="text" name="fb_url" id="name" class="form-control" placeholder="Facebook">	
                    </div>
                    <div class="mb-3">
                        <label for="gmail" class="form-label" >Gmail</label>
                        <input type="text" name="gm_url" id="name" class="form-control" placeholder="Gmail">	
                    </div>
                    <div class="mb-3">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="text" name="in_url" id="name" class="form-control" placeholder="Instagram">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label" >Add Manegment</label>
                        <select name="add_menegment" id="status" class="form-control">
                            <option value="1">Added</option>
                            <option value="0">Block</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label" >Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" id="image">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="{{ route('admin.view_course') }}" class="btn btn-secondary">Cancel</a>
                </form>
          </div>
        </div>
    </div>

</div>
<script type="text/javascript">
      $(document).ready(function(){
          $('#image').change(function(e){
              var reader = new FileReader();
              reader.onload = function(e){
                  $('#new_image').attr('src',e.target.result);
              }
              reader.readAsDataURL(e.target.files['0']);
          });
      });
  
</script>
@endsection