@extends('master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-secondary mb-5">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 400px"
      >
        <h3 class="display-3 font-weight-bold text-white">Contact Us</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Contact Us</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid pt-5">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Get In Touch</span>
          </p>
          <h1 class="mb-4">Contact Us For Any Query</h1>
        </div>
        
        <div class="row">
          <div class="col-lg-7 mb-5">
            <div class="contact-form">
              <div id="success"></div>
              <form action="https://api.web3forms.com/submit" name="sentMessage" id="contactForm" novalidate="novalidate"  method="POST">
                <!-- Replace with your Access Key -->
                <input type="hidden" name="access_key" value="9763aee1-083a-438f-a6be-ec502d900fbf">
                <div class="control-group">
                  <input
                    type="text"
                    class="form-control"
                    name="name"
                    id="name"
                    placeholder="Your Name"
                    required="required"
                    data-validation-required-message="Please enter your name"
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    placeholder="Your Email"
                    required="required"
                    data-validation-required-message="Please enter your email"
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <input
                    type="text"
                    class="form-control"
                    name="subject"
                    id="subject"
                    placeholder="Subject"
                    required="required"
                    data-validation-required-message="Please enter a subject"
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <textarea
                    class="form-control"
                    rows="6"
                    name="message"
                    id="message"
                    placeholder="Message"
                    required="required"
                    data-validation-required-message="Please enter your message"
                  ></textarea>
                  <p class="help-block text-danger"></p>
                </div>
                <div>
                  <button
                    class="btn btn-primary py-2 px-4"
                    type="submit"
                    id="sendMessageButton"
                  >
                    Send Message
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-5 mb-5">
            @php
                $setting = App\Models\Setting::find(1);
            @endphp
            <div class="d-flex">
              <i
                class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Address</h5>
                @if($setting && $setting->address != '')
                    <p>{{$setting->address}}</p>
                @else
	                <p>not available</p>
                @endif
              </div>
            </div>
            <div class="d-flex">
              <i
                class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Email</h5>
                @if($setting && $setting->gmail != '')
                    <p>{{$setting->gmail}}</p>
                @else
	                <p>not available</p>
                @endif
              </div>
            </div>
            <div class="d-flex">
              <i
                class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Phone</h5>
                @if($setting && $setting->phone != '')
                    <p>{{$setting->phone}}</p>
                @else
	                p>not available</p>
                @endif
              </div>
            </div>
            <div class="d-flex">
              <i
                class="far fa-clock d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Opening Hours</h5>
                <strong>Sunday - Saturday:</strong>
                <p class="m-0">09:00 AM - 07:00 PM</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->


@endsection