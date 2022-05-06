@extends('layouts.app')
@section('content')

<style>
    @import url(https://fonts.googleapis.com/css?family=Alegreya+Sans:300);

body {
    font-family: 'Alegreya Sans', sans-serif;
}

/* Sticky footer position and size
-------------------------------------------------- */
html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 300px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 300px;
}

/* Taller footer on small screens */
@media (max-width: 567em) {
    body {
      margin-bottom: 700px;
    }
    .footer {
      height: 700px;
    }
}

/* Sticky footer style and color
-------------------------------------------------- */
footer {
  padding-top: 30px;
  background-color: #292c2f;
  color: #bbb;
}

footer a {
  color: #999;
  text-decoration:none;
}

footer a:hover, footer a:focus {
  color: #aaa;
  text-decoration:none;
  border-bottom:1px dotted #999;
}

footer .form-control {
    background-color: #1f2022;
    box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1);
    border: none;
    resize: none;
    color: #d1d2d2;
    padding: 0.7em 1em;
}


/* Credits: https://www.codeply.com/p/EJd6H4Ejyi */
</style>

<div class="jumbotron">
    <div class="container mt-5">
        <h1 class="display-4">Welcome {{auth()->user()->name}}</h1>
    </div>

    <div class="container mb-3">
        <div class="col-lg-12">
            <caption style="border: inherit; background-color: lightgrey;">
                <span class="align-left"><strong>One time appointments</strong></span>
            </caption>

            <div class="table-responsive">


            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Date Set</th>
                        <th scope="col">Collector Selected</th>
                        <th scope="col">Status</th>

                    </tr>
                </thead>
                <tbody>


                        @foreach(auth()->user()->appointments as $app)
                        <tr>
                            <td>{{$app->date}}</td>
                            <td>{{$app->collector->fname}} {{$app->collector->lname}} </td>
                            <td>{{$app->status}}</td>

                        </tr>

                        @endforeach


                </tbody>
            </table>
            </div>
        </div>
        <div class="col-lg-12">
            <caption style="border: inherit; background-color: lightgrey;">
                <span class="align-left"><strong>Weekly Appointments</strong></span>
            </caption>
            <div class="table-responsive">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Day Set</th>
                        <th scope="col">Collector Selected</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if (auth()->user()->weeklyappointments !== null)
                        @foreach(auth()->user()->weeklyappointments as $app)
                        <tr>
                            <td>{{$app->day_of_week}}</td>
                            <td>{{$app->collector->fname}} {{$app->collector->lname}}</td>
                            <td>{{$app->status}}</td>
                        </tr>

                        @endforeach
                    @endif

                </tbody>
            </table>
            </div>
        </div>


        <a class="btn btn-success mb-2" href="{{route('user.appointments')}}" style="">Make an appointment</a>
        <span></span>
        <a class="btn btn-success mb-3" href="{{route('user.weeklyappointments')}}" style="">Make a weekly appointment</a>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h5><i class="fa fa-road"></i> AboboyaExpress.</h5>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li><a href="{{route('user.appointments')}}">Appointment</a></li>
                                <li><a href="{{route('user.weeklyappointments')}}">Weekly Appointments</a></li>
                                <li><a href="{{route('user.profile')}}">Profile</a></li>

                            </ul>
                        </div>
                    </div>

                    <br>
                </div>
                <div class="col-md-5">
                    <h5 class="text-md-right">Report Collector</h5>
                    <form method="POST" action="{{route('user.report')}}">
                        @csrf
                        <fieldset class="form-group">
                            <select name="collector_id" class="form-select form-select-lg">
                                @foreach ( $data as $d )
                                    <option value="{{$d->collector->id}}">{{$d->collector->fname}} {{$d->collector->lname}} </option>
                                @endforeach

                            </select>
                        </fieldset>
                        <br>
                        <fieldset class="form-group">
                            <textarea class="form-control" name="report" placeholder="Report (Please be as specific as possible)"></textarea>
                        </fieldset>
                        <br>

                        <fieldset class="form-group text-xs-right">
                            <button type="submit" class="btn btn-secondary btn-lg">Send</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </footer>


    <!-- credits: https://www.codeply.com/p/EJd6H4Ejyi -->


  </div>
@endsection
