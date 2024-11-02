@extends('admin.admin_dashboard')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">About Us</h4>
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
            <h6 class="card-title mb-3" style="font-size: large;">About Update</h6>
                <form class="forms-sample" action="{{ route('admin.saveAbout') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="description" class="form-label mb-3" style="font-weight: bold;">About Description</label>
                        <textarea name="about_desc" id="summernote" cols="30" rows="10" class=" form-control" required>@if($about) {{ $about->about_desc }} @endif</textarea>
                    </div>
                    <div class="mb-3">
                    <label for="description" class="form-label mb-3" style="font-weight: bold;">Mission</label>
                    <textarea name="mission" id="summernote1" cols="30" rows="10" class=" form-control" required>@if($about) {{ $about->mission }} @endif</textarea>
                    </div>
                    <div class="mb-3">
                    <label for="description" class="form-label mb-3" style="font-weight: bold;">Vission</label>
                    <textarea name="vission" id="summernote2" cols="30" rows="10" class=" form-control" required>@if($about) {{ $about->vission }} @endif</textarea>
                    </div>
                    <div class="mb-3">
                    <label for="description" class="form-label mb-3" style="font-weight: bold;">Job Placement Description</label>
                    <textarea name="job_placement" id="summernote3" cols="30" rows="10" class=" form-control" required>@if($about) {{ $about->job_placement }} @endif</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-3" style="font-weight: bold;">About Image</label>
                        <input type="file" class="form-control" name="image" id="image">
                        @if($about)
                          <img id="showImage" src="{{ asset('public/about/'.$about->image) }}" style="width: 150px; margin:5px;" >
                        @endif 
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-secondary">Cancel</button>
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
                  $('#showImage').attr('src',e.target.result);
              }
              reader.readAsDataURL(e.target.files['0']);
          });
      });
</script>

@endsection