@extends('admin.admin_dashboard')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Update Event</h4>
      </div>
      <div class="d-flex align-items-center flex-wrap text-nowrap">
        <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
          <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
          <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
        </div>
        <a href="{{ route('admin.view_event') }}">
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
            <h6 class="card-title mb-3" style="font-size: large;">Update Event</h6>
                <form class="forms-sample" action="{{ route('admin.update_event',$event->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="description" class="form-label" >Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $event->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="summernote" cols="30" rows="10" class=" form-control" placeholder="Description" value="{{ $event->description }}">{{ $event->description }}</textarea>
                    </div>
                    <h2 class="h4 mb-3">Date Month Year</h2>
                    <div class="mb-3">
                        <label for="date" class="form-label" >Date</label>
                        <input type="text" name="date" id="date" class="form-control" placeholder="Date" value="{{ $event->date }}">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" id="image">
                        @if($event)
                          <img id="new_image" src="{{ asset('public/eventimage/'.$event->image) }}" style="width: 200px; margin:5px;" >
                        @endif 
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="{{ route('admin.view_event') }}" class="btn btn-secondary">Cancel</a>
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