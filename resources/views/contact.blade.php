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
                            <h1 class="carousel-title">Contact Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--========== PAGE LAYOUT ==========-->
        <!-- Contact List -->
        <div class="section-seperator">
            <div class="content-lg container">
                <div class="row">
                    <!-- Contact List -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h3>Accra<span class="text-uppercase margin-l-20">Head Office</span></h3>
                            <p>You can find us at Baatsona spintex</p>
                            <ul class="list-unstyled contact-list">
                                <li><i class="margin-r-10 color-base icon-call-out"></i> (+233) 024 600 0307</li>
                                <li><i class="margin-r-10 color-base icon-envelope"></i> kwakuayemang.2000@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Contact List -->




                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Contact List -->

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
