<!DOCTYPE html>
<html lang="en">

    @include('frontend.partials.head')

  <body class="m-0 p-0">

    <!-- Navbar Start -->
    @include('frontend.partials.navbar')
    <!-- Navbar End -->
    

    @yield('content')



    <!-- Footer Start -->
    @include('frontend.partials.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    @include('frontend.partials.scripts')
  </body>
</html>
