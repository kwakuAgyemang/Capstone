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
                        <h1 class="carousel-title">Pricing</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!--========== PAGE LAYOUT ==========-->
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
                            <li class="pricing-list-item">Trash is disposed of safely at a dumpsite</li>

                        </ul>

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
                            <li class="pricing-list-item">Trash is disposed of safely at a dumpsite</li>
                        </ul>

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

        <!--========== END PAGE LAYOUT ==========-->

@endsection
