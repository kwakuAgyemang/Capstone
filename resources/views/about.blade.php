@extends('layouts.front')
@section('content')
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="img-responsive" src="img/1920x1080/01.jpg" alt="Slider Image">
            <div class="container">
                <div class="carousel-centered">
                    <div class="margin-b-40">
                        <h1 class="carousel-title">About Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--========== PAGE LAYOUT ==========-->

        <!-- About -->
        <div class="content-lg container">
            <div class="row margin-b-20">
                <div class="col-sm-6">
                    <h2>About</h2>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <div class="col-sm-7 sm-margin-b-50">
                    <div class="margin-b-30">
                        <p>We aim to provide aboboya trash collection service to all parts of the country that do not currently have existing systems. We believe that this would go a long way help to keep the country clean and healthy</p>
                    </div>
                    <p>We work with various aboboya collectors within Accra that provide trash collection service. We are always willing to listen to our customers and are always looking to make changes wherever and whenever possible so we are always willing to listen to advice from our customers</p>
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="img/640x380/01.jpg" alt="Our Office">
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End About -->

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



        <!-- Team -->
        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Meet the Team</h2>
                    </div>
                </div>
                <!--// end row -->

                <div class="row">
                    <!-- Team -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="bg-color-white margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="img/770x860/01.jpg" alt="Team Image">
                            </div>
                        </div>
                        <h4>Kwaku Ofosu-Agyeman <span class="text-uppercase margin-l-20">CEO</span></h4>
                        <p>A soon to be graduate of Ashesi University developed this system to help with the situation in areas that did not have a trash collection system in place</p>

                    </div>
                    <!-- End Team -->




                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Team -->
        <!--========== END PAGE LAYOUT ==========-->

@endsection
