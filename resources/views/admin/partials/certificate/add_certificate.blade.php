@extends('admin.admin_dashboard')

@section('admin')
<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Certificate</h4>
      </div>
      <div class="d-flex align-items-center flex-wrap text-nowrap">
        <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
          <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
          <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
        </div>
        <a href="{{ route('admin.view_certificate') }}">
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
            <h6 class="card-title mb-3" style="font-size: large;">Add Certificate</h6>
            <form class="forms-sample" action="{{ route('admin.upload_certificate') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Student Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Student Name" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Student Contact Number</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Contact Number" required>
                </div>
                <div class="mb-3">
                    <label for="trade_name" class="form-label">Trade</label>
                    <input type="text" name="trade_name" id="trade_name" class="form-control" placeholder="Trade" required>
                </div>
                <div class="mb-3">
                    <label for="batch_no" class="form-label">Batch No</label>
                    <input type="text" name="batch_no" id="batch_no" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="registration_no" class="form-label">Registration No</label>
                    <input type="text" name="registration_no" id="registration_no" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="passport_no" class="form-label">Passport No</label>
                    <input type="text" name="passport_no" id="passport_no" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
            </form>
        </div>
    </div>
</div>


</div>

@endsection