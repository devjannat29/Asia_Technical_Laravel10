@extends('admin.admin_dashboard')

@section('admin')
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&family=Playfair+Display:wght@400;600;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

<style>
    .certificate-container {
        padding: 20px;
        width: 100%;
        max-width: 1024px;
        margin: auto;
    }

    .certificate {
        border: 15px solid #0C5280;
        padding: 30px;
        position: relative;
        background: #fff;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        word-wrap: break-word;
    }

    .certificate:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('public/frontend/images/icon/logo.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        z-index: -1;
        opacity: 0.1; /* Watermark effect */
    }

    .certificate-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }

    .certificate-header .logo {
        max-width: 80px;
        height: auto;
    }

    .certificate-title {
        text-align: center;
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        font-size: 20px;
        color: #0C5280;
        margin-bottom: 10px;
    }

    h1 {
        font-size: 32px;
        font-family: 'Merriweather', serif;
        font-weight: 700;
        color: #0C5280;
        text-align: center;
        margin-bottom: 20px;
    }

    .student-name {
        font-size: 20px;
        font-family: 'Playfair Display', serif;
        font-weight: 600;
        color: #000;
        text-align: center;
        margin: 15px 0;
    }

    .certificate-content {
        text-align: center;
        font-size: 18px;
        font-family: 'Playfair Display', serif;
        color: #555;
        margin-bottom: 20px;
    }

    .qr-code {
        text-align: center;
        margin-top: 20px;
    }

    .qr-code-container {
        display: inline-block;
    }

    .certificate-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 30px;
        flex-wrap: wrap;
        
    }

    .certificate-footer .signatures {
        text-align: left;
        font-family: 'Merriweather', serif;
        font-size: 14px;
        color: #333;
        flex: 1;
        margin: 10px;
    }


    /* Responsive Design */
    @media (max-width: 768px) {
        .certificate {
            padding: 15px;
        }

        .certificate-header .logo {
            max-width: 60px;
        }

        h1 {
            font-size: 24px;
        }

        .student-name {
            font-size: 18px;
        }

        .certificate-content {
            font-size: 12px;
        }

        .certificate-footer .signatures {
            font-size: 12px;
        }
    }

    @media (max-width: 480px) {
        .certificate {
            padding: 10px;
        }

        .certificate-header {
            flex-direction: column;
        }

        .certificate-header .logo {
            max-width: 50px;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 20px;
        }

        .student-name {
            font-size: 16px;
        }

        .certificate-content {
            font-size: 10px;
        }

        .certificate-footer {
            flex-direction: column;
            align-items: center;
        }

        .certificate-footer .signatures {
            margin: 10px 0;
        }
    }
</style>


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
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="certificate">
                <div class="certificate-header">
                    <img src="{{ asset('public/upload/govt.png') }}" class="logo" alt="Logo 1">
                    <img src="{{ asset('public/upload/NASD.png') }}" class="logo" alt="Logo 2">
                    <img src="{{ asset('public/frontend/images/icon/logo.png') }}" class="logo" alt="Logo 3">
                </div>

                <div class="certificate-body">
                    <p class="certificate-title">RENR NCLEX AND CONTINUING EDUCATION (CME) Review Masters</p>
                    <h1>Trade Test Participation Certificate</h1>
                    <p class="student-name">{{ $data->name }}</p>
                    <div class="certificate-content">
                        <p>
                            This is to certify that <strong>{{ $data->name }}</strong> has successfully participated in the trade test for
                            <strong>{{ $data->trade_name }}</strong> under Batch Number: <strong>{{ $data->batch_no }}</strong>
                            and Registration Number: <strong>{{ $data->registration_no }}</strong>.
                        </p>
                    </div>
                    <div class="qr-code">
                        <p class="pb-2">Scan the QR Code for verification</p>
                        <div class="qr-code-container">
                            {!! DNS2D::getBarcodeHTML("$data->certificate_no", 'QRCODE', 3, 3) !!}
                        </div>
                    </div>
                </div>

                <div class="certificate-footer">
                    <div class="signatures">
                        <p>Authorized by:</p>
                        <hr width="180px">
                        <p>Principal</p>
                    </div>
                    <div class="signatures">
                        <p>Authorized by:</p>
                        <hr width="180px">
                        <p>Principal</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


