<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>AboboyaExpress</title>
</head>
<style>
    .avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
</style>
<body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
          <a class="navbar-brand" href="{{route('collector.home')}}">
            <img src="https://placeholder.pics/svg/150x50/888888/EEE/Logo" alt="..." height="36">
          </a>
          @auth

          @endauth


          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              @guest
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="{{route('collector.register')}}">Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('collector.login')}}">Login</a>
                </li>

              </ul>
              @endguest
              @auth
                <nav class="navbar-nav">
                    <a href="{{route('collector.home')}}" class="nav-link">Home</a>
                    <a href="{{route('collector.allOne')}}" class="nav-link">One Time Appointments</a>
                    <a href="{{route('collector.allWeekly')}}" class="nav-link">Weekly Appointments</a>
                </nav>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href=""><img src="{{ asset('/storage/images/profile/'.auth()->user()->profile_pic) }}" alt="Avatar" class="avatar"></a>

                    </li>
                    <li class="nav-item">
                        <form action="{{route('collector.logout')}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </li>
                </ul>
              @endauth



          </div>
        </div>
      </nav>
    @yield('content')
    <!-- JavaScript Bundle with Popper -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmUioxG2m8Bm14O5opTZg9wmwWLsru6tU&libraries=places"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
