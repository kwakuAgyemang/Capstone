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
    <link rel="shortcut icon" href="{{secure_asset('/storage/images/profile/AboboyaExpress-logos.jpeg' )}}" type="image/x-icon" />
    <!-- GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="{{secure_asset('vendor/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{secure_asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="{{secure_asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{secure_asset('vendor/swiper/css/swiper.min.css')}} " rel="stylesheet" type="text/css"/>

    <!-- THEME STYLES -->
    <link href="{{secure_asset('css/layout.min.css')}}" rel="stylesheet" type="text/css"/>
    <title>AboboyaExpress</title>
</head>
<body>
         <!--========== HEADER ==========-->
    <header class="header navbar-fixed-top">
        <!-- Navbar -->
        <nav class="navbar" style="color: black" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="menu-container">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="toggle-icon"></span>
                    </button>

                    <!-- Logo -->
                    <div class="logo">
                        <a class="logo-wrap" href="{{route('home')}}">

                            <img class="logo-img logo-img-active" src="img/AboboyaExpress-logos.jpeg" alt="Asentus Logo">
                        </a>
                    </div>
                    <!-- End Logo -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-collapse">
                    <div class="menu-container">
                        <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item"><a class="{{ Request::is('index*') ? 'active' : '' }} nav-item-child nav-item-hover" href="/">Home</a></li>
                            <li class="nav-item"><a class="{{ Request::is('pricing*') ? 'active' : '' }} nav-item-child nav-item-hover" href="pricing">Pricing</a></li>
                            <li class="nav-item"><a class="{{ Request::is('about*') ? 'active' : '' }} nav-item-child nav-item-hover" href="about">About</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{route('user.register')}}">Sign Up</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{route('collector.register')}}">Sign Up(Collector)</a></li>
                            <li class="nav-item"><a class="{{ Request::is('contact*') ? 'active' : '' }} nav-item-child nav-item-hover" href="contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Navbar Collapse -->
            </div>
        </nav>
        <!-- Navbar -->
    </header>
    <!--========== END HEADER ==========-->

    @yield('content')
<!--========== FOOTER ==========-->
<footer class="footer">
    <!-- Links -->
    <div class="footer-seperator">
        <div class="content-lg container">
            <div class="row">
                <div class="col-sm-2 sm-margin-b-50">
                    <!-- List -->
                    <ul class="list-unstyled footer-list">
                        <li class="footer-list-item"><a class="footer-list-link" href="index">Home</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="about">About</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="pricing">Pricing</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="contact">Contact</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="{{route('user.register')}}">Sign Up</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="{{route('collector.register')}}">Sign Up(Collector)</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="{{route('user.login')}}">Log In</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="{{route('collector.login')}}">Log In (Collector)</a></li>
                    </ul>
                    <!-- End List -->
                </div>

                {{-- <div class="col-sm-5 sm-margin-b-30">
                    <h2 class="color-white">Send Us A Note</h2>
                    <input type="text" class="form-control footer-input margin-b-20" placeholder="Name" required>
                    <input type="email" class="form-control footer-input margin-b-20" placeholder="Email" required>
                    <input type="text" class="form-control footer-input margin-b-20" placeholder="Phone" required>
                    <textarea class="form-control footer-input margin-b-30" rows="6" placeholder="Message" required></textarea>
                    <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Submit</button>
                </div> --}}
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Links -->
</footer>
<!--========== END FOOTER ==========-->

<!-- Back To Top -->
<a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

<!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- CORE PLUGINS -->
<script src="{{secure_asset('vendor/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{secure_asset('vendor/jquery-migrate.min.js')}}" type="text/javascript"></script>
<script src="{{secure_asset('vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>

<!-- PAGE LEVEL PLUGINS -->
<script src="{{secure_asset('vendor/jquery.easing.js')}}" type="text/javascript"></script>
<script src="{{secure_asset('vendor/jquery.back-to-top.js')}}" type="text/javascript"></script>
<script src="{{secure_asset('vendor/jquery.smooth-scroll.js')}}" type="text/javascript"></script>
<script src="{{secure_asset('vendor/jquery.wow.min.js')}}" type="text/javascript"></script>
<script src="{{secure_asset('vendor/swiper/js/swiper.jquery.min.js')}}" type="text/javascript"></script>
<script src="{{secure_asset('vendor/masonry/jquery.masonry.pkgd.min.js')}}" type="text/javascript"></script>
<script src="{{secure_asset('vendor/masonry/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>

<!-- PAGE LEVEL SCRIPTS -->
<script src="{{secure_asset('js/layout.min.js')}}" type="text/javascript"></script>
<script src="{{secure_asset('js/components/wow.min.js')}}" type="text/javascript"></script>
<script src="{{secure_asset('js/components/swiper.min.js')}}" type="text/javascript"></script>
<script src="{{secure_asset('js/components/masonry.min.js')}}" type="text/javascript"></script>

</body>
</html>


