@extends('admin.admin_dashboard')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Setting</h4>
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
            <h6 class="card-title">Setting Update</h6>
                <form class="forms-sample" action="{{ route('admin.saveSetting') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" placeholder="Meta Title" required @if($setting) value="{{ $setting->meta_title }}" @endif>
                    </div>
                    <div class="mb-3">
                        <label for="description">Technical Address</label>
                        <textarea name="address"  cols="10" rows="3" class=" form-control" required>@if($setting) {!! $setting->address !!} @endif</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="description">Phone Number</label>
                        <textarea name="phone"  cols="10" rows="3" class=" form-control" required>@if($setting) {{ $setting->phone }} @endif</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="description">Gmail</label>
                        <textarea name="gmail"  cols="10" rows="3" class=" form-control" required>@if($setting) {{ $setting->gmail }} @endif</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="title">Facebook</label>
                        <input type="text" name="fb_url" id="name" class="form-control" placeholder="Facebook" required @if($setting) value="{{ $setting->fb_url }}" @endif>
                    </div>
                    <div class="mb-3">
                        <label for="designation">Instagram</label>
                        <input type="text" name="in_url" id="name" class="form-control" placeholder="Instagram" required @if($setting) value="{{ $setting->in_url }}" @endif>
                    </div>
                    <div class="mb-3">
                        <label for="title">Gmail</label>
                        <input type="text" name="gm_url" id="name" class="form-control" placeholder="Gmail" required @if($setting) value="{{ $setting->gm_url }}" @endif>	
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Meta Icon</label>
                        <input type="file" class="form-control" name="meta_image" id="meta_image">
                        @if($setting)
                          <img id="new_meta_image" src="{{ asset('public/setting/'.$setting->meta_image) }}" style="width: 150px; margin:5px;" >
                        @endif 
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Technical Image</label>
                        <input type="file" class="form-control" name="image" id="image">
                        @if($setting)
                          <img id="showImage" src="{{ asset('public/setting/'.$setting->image) }}" style="width: 150px; margin:5px;" >
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
          $('#meta_image').change(function(e){
              var reader = new FileReader();
              reader.onload = function(e){
                  $('#new_meta_image').attr('src',e.target.result);
              }
              reader.readAsDataURL(e.target.files['0']);
          });
      });

      $(document).ready(function(){
          $('#image').change(function(e){
              var reader = new FileReader();
              reader.onload = function(e){
                  $('#showImage').attr('src',e.target.result);
              }
              reader.readAsDataURL(e.target.files['0']);
          });
      });

      $(document).ready(function(){
          $('#banner_image').change(function(e){
              var reader = new FileReader();
              reader.onload = function(e){
                  $('#new_banner_image').attr('src',e.target.result);
              }
              reader.readAsDataURL(e.target.files['0']);
          });
      });
  
</script>

@endsection