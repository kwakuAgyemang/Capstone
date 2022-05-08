@extends('layouts.app')
@section('content')
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/profile.css')}}">

<body>

  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <div class="container">

        <!-- User -->

      </div>
    </div>
    </nav>
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(../img/1920x1080/03.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
          <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-10">
                  <h1 class="display-2 text-white">Hello {{auth()->user()->name}} </h1>
                  <p class="text-white mt-0 mb-5">This is your profile page.</p>

                </div>
              </div>
          </div>

      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="container col-xl-8">
            <div class="">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>

              </div>
            </div>
            <div class="card-body">
              <form method="POST" action="{{route('user.profile')}}">
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Name</label>
                        <input type="text" id="input-username" name="name" class="form-control form-control-alternative" placeholder="Username" value="{{auth()->user()->name}}">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" name="email" class="form-control form-control-alternative" placeholder="a@example.com" value="{{auth()->user()->email}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">Phone number</label>
                        <input type="text" id="" name="phone_num" class="form-control form-control-alternative" placeholder="First name" value="{{auth()->user()->phone_num}}">
                      </div>
                    </div>

                  </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Area</label>
                        <select name="area" id="" class="form-select">
                            @foreach ($data as $area)
                                <option value="{{$area->id}}" >{{$area->areaName}}</option>
                            @endforeach
                        </select>

                      </div>
                    </div>
                  </div>

                </div>
                <button  type="submit" class="btn btn-secondary">Edit profile</a>


              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="row align-items-center justify-content-xl-between">
      <div class="col-xl-6 m-auto text-center">
        <div class="copyright">
          <p>Made with <a href="https://www.creative-tim.com/product/argon-dashboard" target="_blank">Argon Dashboard</a> by Creative Tim</p>
        </div>
      </div>
    </div>
  </footer>
</div>
</body>

@endsection
