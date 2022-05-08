<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name = "google-signin-client_id" content="463632295031-0u8tqq8ssknh9m3qvredo3rr9qm66ea3.apps.googleusercontent.com">
    <meta name="referrer" content="strict-origin-when-cross-origin">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
    <link rel="shortcut icon" href="{{secure_asset('img/AboboyaExpress-logos.jpeg' )}}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">

    <!-- THEME STYLES -->
    <link href="{{secure_asset('css/layout.min.css')}}" rel="stylesheet" type="text/css"/>
    <title>AboboyaExpress</title>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">

        <div class="container">
          <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{secure_asset('img/AboboyaExpress-logos.jpeg' )}}" alt="..." height="36">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              @guest
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="{{route('user.register')}}">Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('user.login')}}">Login</a>
                </li>

              </ul>
              @endguest
              @auth
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <form action="{{route('user.logout')}}" method="post">
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
