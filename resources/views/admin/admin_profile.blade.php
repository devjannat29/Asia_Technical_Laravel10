@extends('admin.admin_dashboard')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">
  @include('_message')
    <div class="row profile-body">
      <!-- left wrapper start -->
      <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
        <div class="card rounded">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-2">
              <div>
                <img class="wd-100 rounded-circle" src="{{ !empty($profileData->photo) ? url('public/upload/admin_images/'.$profileData->photo) : url('public/upload/no_image.jpg') }}" alt="profile">
                  <span class="h4 ms-3">{{ $profileData->username }}</span>
                </div>
            </div>
            <div class="mt-3">
                <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
                <p class="text-muted">{{ $profileData->username }}</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Lives:</label>
              <p class="text-muted">{{ $profileData->address }}</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
              <p class="text-muted">{{ $profileData->email }}</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
              <p class="text-muted">{{ $profileData->phone }}</p>
            </div>
            <div class="mt-3">
                <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
                <p class="text-muted">{{ $profileData->address }}</p>
            </div>
          </div>
        </div>
      </div>
      <!-- left wrapper end -->
      <!-- middle wrapper start -->
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Profile Update</h6>
                <form class="forms-sample" action="{{ route('admin.profile.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username" value="{{ $profileData->username }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $profileData->name }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $profileData->email }}">
                        <span style="color: red;">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{ $profileData->phone }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Address" value="{{ $profileData->address }}">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Profile Image</label>
                        <input type="file" class="form-control" name="photo" id="image">
                        @if (!empty($profileData->photo))
                          <img id="showImage" src="{{ asset('public/upload/admin_images/'.$profileData->photo) }}" style="width: 150px; margin:5px; border-radius: 50%;" >
                        @endif 
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-secondary">Cancel</button>
                </form>
          </div>
        </div>
      </div>
      <!-- middle wrapper end -->
      
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