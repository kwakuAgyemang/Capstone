@extends('layouts.app')
@section('content')

<div class="jumbotron">
    <div class="container mt-5">
        <h1 class="display-4">Welcome To Aboboya Express</h1>
    </div>

    <div class="container">

            <p class="lead">Current Packages</p>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">Date Set</th>
                        <th scope="col">Collector Selected</th>
                        <th scope="col">Regularity</th>
                        <th scope="col">Status</th>
                        <th scope="col">Day of Week</th>
                    </tr>
                </thead>
                <tbody>


                        @foreach(auth()->user()->appointments as $app)
                        <tr>
                            <td>{{$app->date}}</td>
                            <td>{{$app->collector->name}}</td>
                            <td>
                                @if ($app->regularity == 2)
                                    Weekly
                                @elseif ($app->regularity == 1)
                                    One time
                                @endif

                            </td>
                            <td>{{$app->status}}</td>
                            <td>{{$app->Day_of_week}}</td>
                        </tr>

                        @endforeach


                </tbody>
            </table>


        <a class="btn btn-success" href="{{route('user.appointments')}}" style="">Make an appointment</a>
        <a class="btn btn-success" href="{{route('user.weeklyappointments')}}" style="">Make a weekly appointment</a>
    </div>


  </div>
@endsection
