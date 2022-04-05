@extends('layouts.Capp')
@section('content')

<div class="jumbotron">
    <div class="container mt-5">
        <h1 class="display-4">Welcome {{auth()->user()->name}}</h1>
    </div>

    <div class="container">
            <p class="lead">Weekly Appointments Today</p>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">Collectee Name</th>
                        <th scope="col">Landmark</th>
                        <th scope="col">Status</th>
                        <th scope="col">Collectee Number</th>
                        <th scope="col">Type</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data1 as $app )
                    <tr>
                        <td>{{$app->user->name}}</td>
                        <td>{{$app->landmark}}</td>
                        <td>{{$app->status}}</td>
                        <td>{{$app->user->phone_number}}</td>
                        <td>Weekly</td>


                    </tr>

                    @endforeach
                </tbody>
            </table>


            <p class="lead">One Time Appointments Due</p>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">Date Set</th>
                        <th scope="col">Collectee Name</th>
                        <th scope="col">Landmark</th>
                        <th scope="col">Status</th>
                        <th scope="col">Collectee Number</th>


                    </tr>
                </thead>
                <tbody>


                        @foreach($data as $app)
                        <tr>
                            <td>{{$app->date}}</td>
                            <td>{{$app->user->name}}</td>
                            <td>{{$app->landmark}}</td>
                            <td>{{$app->status}}</td>
                            <td>{{$app->user->phone_number}}</td>

                        </tr>

                        @endforeach


                </tbody>
            </table>


            <a href="{{route('collector.allWeekly')}}" class="btn btn-success">All Weekly Appointments</a>
            <a href="{{route('collector.allOne')}}" class="btn btn-primary">All One Time Appointments</a>

    </div>


  </div>
@endsection
