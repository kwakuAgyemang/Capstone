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
    <link rel="shortcut icon" href="{{asset('/storage/images/profile/AboboyaExpress-logos.jpeg' )}}" type="image/x-icon" />
    <!-- GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/swiper/css/swiper.min.css')}} " rel="stylesheet" type="text/css"/>

    <!-- THEME STYLES -->
    <link href="{{asset('css/layout.min.css')}}" rel="stylesheet" type="text/css"/>
    <title>AboboyaExpress</title>
</head>
<body>

    <!--========== HEADER ==========-->
    <header class="header navbar-fixed-top">
        <!-- Navbar -->
        <nav class="navbar" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="menu-container">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="toggle-icon"></span>
                    </button>

                    <!-- Logo -->
                    <div class="logo">
                        <a class="logo-wrap" href="index.blade.php">

                            <img class="logo-img logo-img-active" src="img/AboboyaExpress-logos.jpeg" alt="Asentus Logo">
                        </a>
                    </div>
                    <!-- End Logo -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-collapse">
                    <div class="menu-container">
                        <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item"><a class="nav-item-child nav-item-hover active" href="index.html">Home</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="pricing.html">Pricing</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="about.html">About</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="products.html">Products</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="faq.html">FAQ</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Navbar Collapse -->
            </div>
        </nav>
        <!-- Navbar -->
    </header>
    <!--========== END HEADER ==========-->

    <!--========== SLIDER ==========-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="container">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>
        </div>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="img-responsive" style="width: 100%; height: auto;" src="img/aboboyaa.png" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40">
                            <h1 class="carousel-title" style="color: black">Every Day</h1>
                            <p style="color: white">Providing quick and easy trash collection from your doorstep<br/> to a dumpsite for safe recycling or to be disposed off</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="item">
                <img class="img-responsive" style="width: 100%; height: auto;" src="img/aboboyaa2.png" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40">
                            <h2 class="carousel-title" style="color: black">Weekly</h2>
                            <p style="color: white">Make a weekly order and have your trash collected every week <br/> on the day of your choice</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========== SLIDER ==========-->

    <!--========== PAGE LAYOUT ==========-->
    <!-- Service -->
    <div class="bg-color-sky-light" data-auto-height="true">
        <div class="content-lg container">
            <div class="row row-space-1 margin-b-2">
                <div class="col-sm-4 sm-margin-b-2">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-chemistry"></i>
                            </div>
                            <div class="service-info">
                                <h3>Art Of Coding</h3>
                                <p class="margin-b-5">Programmed to make sure the collectors only collect for those in your area</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 sm-margin-b-2">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-screen-tablet"></i>
                            </div>
                            <div class="service-info">
                                <h3>Responsive Design</h3>
                                <p class="margin-b-5">Website can easily be used on any device</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 sm-margin-b-2">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-speedometer"></i>
                            </div>
                            <div class="service-info">
                                <h3>Fast Delivery</h3>
                                <p class="margin-b-5">Collections are done the morning of the set date</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service -->


    <!-- Pricing -->
    <div class="bg-color-sky-light">
        <div class="content-lg container">
            <div class="row row-space-1">
                <h3>Appointment Types</h3>
                <div class="col-sm-6 sm-margin-b-2">
                    <!-- Pricing -->
                    <div class="pricing">
                        <div class="margin-b-30">
                            <i class="pricing-icon icon-chemistry"></i>
                            <p>One time Appointment</p>
                        </div>
                        <ul class="list-unstyled pricing-list margin-b-50">
                            <li class="pricing-list-item">Basic Features</li>
                            <li class="pricing-list-item">Collection at your doorstep</li>

                        </ul>
                        <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                    </div>
                    <!-- End Pricing -->
                </div>
                <div class="col-sm-6 sm-margin-b-2">
                    <!-- Pricing -->
                    <div class="pricing">
                        <div class="margin-b-30">
                            <i class="pricing-icon icon-badge"></i>
                            <p>Weekly Appointment</p>
                        </div>
                        <ul class="list-unstyled pricing-list margin-b-50">
                            <li class="pricing-list-item">Basic Features</li>
                            <li class="pricing-list-item">Collection at your doorstep every week</li>
                        </ul>
                        <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                    </div>
                    <!-- End Pricing -->
                </div>

                    <!-- End Pricing -->
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Pricing -->

    <!-- Promo Section -->
    <div class="promo-section overflow-h">
        <div class="container">
            <div class="clearfix">
                <div class="ver-center">
                    <div class="ver-center-aligned">
                        <div class="promo-section-col">
                            <h2>Our Clients</h2>
                            <p>Our main cliental comes from areas that do not have Zoomlion collecting their trash. However we service any area as long as there is a collector that is within that area</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="promo-section-img-right">
            <img class="img-responsive" src="img/970x970/01.jpg" alt="Content Image">
        </div>
    </div>
    <!-- End Promo Section -->


    <!--========== END PAGE LAYOUT ==========-->

    <!--========== FOOTER ==========-->
    <footer class="footer">
        <!-- Links -->
        <div class="footer-seperator">
            <div class="content-lg container">
                <div class="row">
                    <div class="col-sm-2 sm-margin-b-50">
                        <!-- List -->
                        <ul class="list-unstyled footer-list">
                            <li class="footer-list-item"><a class="footer-list-link" href="#">Home</a></li>
                            <li class="footer-list-item"><a class="footer-list-link" href="#">About</a></li>
                            <li class="footer-list-item"><a class="footer-list-link" href="#">Pricing</a></li>
                            <li class="footer-list-item"><a class="footer-list-link" href="#">Contact</a></li>
                        </ul>
                        <!-- End List -->
                    </div>
                    <div class="col-sm-4 sm-margin-b-30">
                        <!-- List -->
                        <ul class="list-unstyled footer-list">
                            <li class="footer-list-item"><a class="footer-list-link" href="#">Twitter</a></li>
                            <li class="footer-list-item"><a class="footer-list-link" href="#">Facebook</a></li>
                            <li class="footer-list-item"><a class="footer-list-link" href="#">Instagram</a></li>
                            <li class="footer-list-item"><a class="footer-list-link" href="#">YouTube</a></li>
                        </ul>
                        <!-- End List -->
                    </div>
                    <div class="col-sm-5 sm-margin-b-30">
                        <h2 class="color-white">Send Us A Note</h2>
                        <input type="text" class="form-control footer-input margin-b-20" placeholder="Name" required>
                        <input type="email" class="form-control footer-input margin-b-20" placeholder="Email" required>
                        <input type="text" class="form-control footer-input margin-b-20" placeholder="Phone" required>
                        <textarea class="form-control footer-input margin-b-30" rows="6" placeholder="Message" required></textarea>
                        <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Submit</button>
                    </div>
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
<script src="{{asset('vendor/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/jquery-migrate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>

<!-- PAGE LEVEL PLUGINS -->
<script src="{{asset('vendor/jquery.easing.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/jquery.back-to-top.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/jquery.smooth-scroll.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/jquery.wow.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/swiper/js/swiper.jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/masonry/jquery.masonry.pkgd.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/masonry/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>

<!-- PAGE LEVEL SCRIPTS -->
<script src="{{asset('js/layout.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/components/wow.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/components/swiper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/components/masonry.min.js')}}" type="text/javascript"></script>

</body>
<!-- END BODY -->

</html>
