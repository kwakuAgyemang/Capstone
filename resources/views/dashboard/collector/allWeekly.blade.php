@extends('layouts.Capp')
@section('content')


<p class="lead">All Weekly Appointments</p>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">Date Set</th>
                        <th scope="col">Collectee Name</th>
                        <th scope="col">Landmark</th>
                        <th scope="col">Collectee Number</th>


                    </tr>
                </thead>
                <tbody>


                        @foreach($weekly as $app)
                        <tr>
                            <td>{{$app->day_of_week}}</td>
                            <td>{{$app->user->name}}</td>
                            <td>{{$app->landmark}}</td>
                            <td>{{$app->user->phone_num}}</td>

                        </tr>

                        @endforeach


                </tbody>
            </table>

@endsection
