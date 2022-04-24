@extends('layouts.Capp')
@section('content')

<div class="jumbotron">
    <div class="container mt-5 ">
        <h1 class="display-4">Welcome {{auth()->user()->fname}} {{auth()->user()->lname}}</h1>
    </div>
</div>
@if (count($data1) || count($data2) )
<div class="container">
    <div class="col-lg-12">


        <div class="table table-responsive mt-3">

            <caption style="border: inherit; background-color: lightgrey;">
                <span class="align-left"><strong>Appointments Due Today</strong></span>
            </caption>
        <table class="table table-bordered">

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
                    <td>{{$app->user->phone_num}}</td>
                    <td>One Time</td>


                </tr>



                @endforeach
                @foreach ($data2 as $app)
                <td>{{$app->user->name}}</td>
                <td>{{$app->landmark}}</td>
                <td>{{$app->status}}</td>
                <td>{{$app->user->phone_num}}</td>
                <td>Weekly</td>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
    <div class="container container-fluid">
    <div class="col-lg-12">


        <div class="table table-responsive">

            <caption style="border: inherit; background-color: lightgrey;">
                <span class="align-left"><strong>One Time Appointments Due Soon</strong></span>
            </caption>
        <table class="table table-bordered">

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
                            <td>{{$app->user->phone_num}}</td>

                        </tr>

                        @endforeach


                </tbody>
            </table>
        </div>
    </div>



            <a href="{{route('collector.allWeekly')}}" class="btn btn-success">All Weekly Appointments</a>
            <a href="{{route('collector.allOne')}}" class="btn btn-primary">All One Time Appointments</a>
        </div>
    </div>


  </div>
@endsection
