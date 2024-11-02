@extends('admin.admin_dashboard')

@section('admin')
<style>
    .image-container {
        display: flex;
        gap: 10px; /* space between images */
        justify-content: center;
        flex-wrap: wrap; /* ensures responsiveness on smaller screens */
    }
    .image-area {
        position: relative;
        width: 30%; /* Adjust the width to fit three images on one line */
        background: #333;
    }
    .image-area img {
        max-width: 100%;
        height: auto;
        display: block;
    }
    .remove-image {
        display: none;
        position: absolute;
        top: -10px;
        right: -10px;
        border-radius: 10em;
        padding: 2px 6px 3px;
        text-decoration: none;
        font: 700 21px/20px sans-serif;
        background: #555;
        border: 3px solid #fff;
        color: #FFF;
        box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 2px 4px rgba(0,0,0,0.3);
        text-shadow: 0 1px 2px rgba(0,0,0,0.5);
        -webkit-transition: background 0.5s;
        transition: background 0.5s;
    }
    .remove-image:hover {
        background: #E54E4E;
        padding: 3px 7px 5px;
        top: -11px;
        right: -11px;
    }
    .remove-image:active {
        background: #E54E4E;
        top: -10px;
        right: -11px;
    }
    .image-area:hover .remove-image {
        display: inline;
    }
</style>
<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Image Gallery</h4>
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
                <form class="forms-sample" action="{{ route('admin.upload_gallery') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="image" class="form-label">Images (Only jpg,jpeg,png,webp)</label>
                        <input type="file" class="form-control" name="image[]" multiple required>
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
                  <h6 class="card-title">Image Gallery</h6>
                  <div class="image-container">
                  @foreach ($data as $img)
                  @if ($img != "")
                    <div class="image-area">
                      <img src="{{ asset('public/galleryimage/'.$img->image) }}" alt="Preview">
                      <a class="remove-image" href="{{ route('admin.delete_gallery', $img->id) }}" style="display: inline;">&#215;</a>
                    </div>
                  @endif
                  @endforeach
                  </div>
                </div>
              </div>
        </div>
    </div>

</div>

@endsection