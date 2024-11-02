@extends('master')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-secondary">
      <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">Teachers Information</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="{{ route('home.index') }}">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0 text-info" style="color: white;">Teachers Information</p>
        </div>
      </div>
</div>
<!-- Header End -->
<!--End Page Title-->
<!--latest news Section-->
@include('frontend.pages.partials.latest_news')
<!--End latest news Section-->
<!-- Gallery Start -->
<div class="container-fluid pt-5 pb-3">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Our Faculties & Management</span>
          </p>
          <h1 class="mb-4">Making Together on Way to Reach a Future Milestone.</h1>
        </div>

        <div class="card">
            <div class="card-body table-responsive p-0">								
                <table class="table table-hover text-nowrap" style="color: black">
                <thead>
                            <tr>
                                <th class="Product" colspan="2">Teachers & Stuff Name </th>
                                <th class=""></th>
                                <th class="price">Educational Qualification</th>
                                <th class="tex">Designation</th>
                                <th class="total">Department</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($members as $member)
                            <tr>
                                <td class="product">
                                    <img width="100" src="public/memberimage/{{$member->image}}" alt="image">
                                </td>
                                <td>
                                    <h6>{{ $member->name }}</h6>
                                </td>
                                <td></td>
                                <td class="price">
                                    {{ $member->education }}
                                </td>
                                <td class="qty">
                                    {{ $member->designation }}
                                </td>
                                <td class="total">
                                    {{ $member->department }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>										
            </div>
        </div>

      </div>
    </div>
    <!-- Gallery End -->
    <div class="your-paginate mt-4">
    {{ $members->links() }}
</div>
<!--Cart Section-->

@endsection