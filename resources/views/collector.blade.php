@extends('layouts.app')
@section('content')

<div class="jumbotron">
    <div class="container mt-5">
        <h1 class="display-4">Welcome To Aboboya Express</h1>
    </div>

    <div class="container">
            <p class="lead">Due Today</p>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">Collectee Name</th>
                        <th scope="col">Landmark</th>
                        <th scope="col">Status</th>
                        <th scope="col">Complete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data1 as $app )
                    <tr>
                        <td>{{$app->user->name}}</td>
                        <td>{{$app->landmark}}</td>
                        <td>{{$app->status}}</td>
                        <td>
                            <form action="">
                                @csrf
                                <button class="btn btn-success">Complete</button>

                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <p class="lead">Packages Due</p>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">Date Set</th>
                        <th scope="col">Collectee Name</th>
                        <th scope="col">Landmark</th>
                        <th scope="col">Regularity</th>
                        <th scope="col">Status</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>


                        @foreach($data as $app)
                        <tr>
                            <td>{{$app->date}}</td>
                            <td>{{$app->user->name}}</td>
                            <td>{{$app->landmark}}</td>
                            <td>
                                @if ($app->regularity === 1)
                                Once
                                @else
                                    Weekly
                                @endif
                            </td>
                            <td>{{$app->status}}</td>
                            <td>
                                <form action="">
                                    @csrf
                                    <button class="btn btn-success">Complete</button>

                                </form>
                            </td>
                        </tr>

                        @endforeach


                </tbody>
            </table>


    </div>


  </div>
@endsection
