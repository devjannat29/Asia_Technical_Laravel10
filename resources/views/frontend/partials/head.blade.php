<head>
    <meta charset="utf-8" />
    @php
        $setting = App\Models\Setting::find(1);
    @endphp
	@if($setting && $setting->meta_title != '')
	<title>{{$setting->meta_title}}</title>
    @else
	<p></p>
    @endif
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="{{ asset('public/frontsite/img/metalogo.png') }} " rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet"/>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"/>

    <!-- Flaticon Font -->
    <link href="{{ asset('public/frontsite/lib/flaticon/font/flaticon.css') }}" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('public/frontsite/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/frontsite/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet" />


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('public/frontsite/css/style.css') }}" rel="stylesheet" />
  </head>
