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
                    </tr>
                </thead>
                <tbody>


                        @foreach(auth()->user()->appointments as $app)
                        <tr>
                            <td>{{$app->date}}</td>
                            <td>{{$app->user->name}}</td>
                        </tr>

                        @endforeach


                </tbody>
            </table>


        <a class="btn btn-success" href="{{route('appointment')}}" style="">Make an appointment</a>
    </div>


  </div>
@endsection
