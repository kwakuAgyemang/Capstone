@extends('layouts.Capp')
@section('content')


<p class="lead">All Daily Appointments</p>
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


                        @foreach($oneTime as $app)
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

@endsection
