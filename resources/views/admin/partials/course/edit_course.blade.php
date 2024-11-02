@extends('admin.admin_dashboard')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Update Course</h4>
      </div>
      <div class="d-flex align-items-center flex-wrap text-nowrap">
        <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
          <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
          <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
        </div>
        <a href="{{ route('admin.view_course') }}">
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
            <h6 class="card-title mb-3" style="font-size: large;">Add Course</h6>
                <form class="forms-sample" action="{{ route('admin.update_course',$course->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="description" class="form-label" >Course Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{$course->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="summernote" cols="30" rows="10" class=" form-control" value="{{$course->description}}">{{$course->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label" >Slug</label>
                        <input type="text" name="slug" id="price" class="form-control" placeholder="slug" value="{{$course->slug}}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Registration Fee</label>
                        <input type="text" name="Fee" id="price" class="form-control" placeholder="Price" value="{{$course->Fee}}">	
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label" >Course Duration</label>
                        <input type="text" name="duration" id="price" class="form-control" placeholder="Duration" value="{{$course->duration}}">	
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label" >Category</label>
                        <select name="category" id="category" class="form-control">
                            <option value="{{$course->category}}">{{$course->category}}</option>
                            @foreach ($category as $categories)
                            <option value="{{$categories->name}}">{{$categories->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label" >Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="{{$course->status}}">
                                @if ( $course->status != '0' )
                                    <p>Active</p>
                                @else
                                    <p>Inactive</p>
                                @endif
                            </option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label" >Registration Link</label>
                        <input type="text" name="link" id="price" class="form-control" placeholder="Registration Link" value="{{$course->link}}">	
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" id="image">
                        @if($course)
                          <img id="new_image" src="{{ asset('public/courseimage/'.$course->image) }}" style="width: 200px; margin:5px;" >
                        @endif 
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