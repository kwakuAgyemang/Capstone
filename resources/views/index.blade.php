@extends('layouts.app')

@section('content')




<div class="jumbotron">
    <div class="container">
        <ul>
            <li>
                <a href="{{route('register')}}">Register</a>
            </li>
                <a href="{{route('login')}}">Login</a>
            </li>
        </ul>



    </div>

</div>

    <!--degree symbol = &deg; -->

@endsection
