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
        <a href="{{ route('admin.add_certificate') }}">
            <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                <i class="btn-icon-prepend" data-feather="download-cloud"></i>
                Add Certificate
            </button>
        </a>
      </div>
    </div>
    @include('_message')

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h6 class="card-title">Certificate</h6>
                  <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                      <thead>
                        <tr>
                            <th width="100">Student Name</th>
                            <th width="100">Contact Number</th>
                            <th width="100">Trade</th>
                            <th width="100">Batch No</th>
                            <th width="100">Registration No</th>
                            <th width="100">Passport No</th>
                            <th width="100">QR Code</th>
                            <th width="100">Certificate No</th>
                            <th width="100">Issue Date</th>
                            <th width="100">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($data as $doc)
                        <tr>
                        <td>
                          <a href="{{route('admin.certificate',$doc->id)}}">{{ $doc->name }}</a>
                        </td>									
                        <td>{{ $doc->phone }}</td>
                        <td>{{ $doc->trade_name }}</td>
                        <td>{{ $doc->batch_no }}</td>	
                        <td>{{ $doc->registration_no }}</td>	
                        <td>{{ $doc->passport_no }}</td>	
                        <td>{!! DNS2D::getBarcodeHTML("$doc->certificate_no", 'QRCODE', 2,2) !!}</td>	
                        <td>{{ $doc->certificate_no }}</td>	
                        <td>{{ $doc->created_at->format('d-m-Y') }}</td>								
                        <td>
                          <a href="{{route('admin.certificate',$doc->id)}}"><i class="btn-primary" data-feather="eye"></i></a>
                          <a href="{{route('print_certificate',$doc->id)}}" class="m-2"><i style="color: green" data-feather="download"></i></a>
                          <a href="{{route('admin.edit_certificate',$doc->id)}}" class="m-2"><i style="color: green" data-feather="edit"></i></a>
                          <a href="{{ route('admin.delete_certificate',$doc->id) }}" onclick="showSwal('passing-parameter-execute-cancel')"><i style="color: red" data-feather="x-circle"></i></a>
                        </td>
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