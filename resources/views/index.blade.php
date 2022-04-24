@extends('layouts.front')
@section('content')
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
                        <a href="pricing" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
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
                        <a href="pricing" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
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


@endsection
