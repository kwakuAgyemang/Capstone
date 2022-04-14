@extends('layouts.app')
@section('content')

<div class="jumbotron">
    <div class="container mt-5">
        <h1 class="display-4">Welcome {{auth()->user()->name}}</h1>
    </div>

    <div class="container">

            <p class="lead">One time appointments</p>
            <table class="table table-responsive">
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

            <p class="lead">Weekly Appointments</p>
            <table class="table table-responsive">
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


        <a class="btn btn-success" href="{{route('user.appointments')}}" style="">Make an appointment</a>
        <a class="btn btn-success" href="{{route('user.weeklyappointments')}}" style="">Make a weekly appointment</a>
    </div>


  </div>
@endsection
