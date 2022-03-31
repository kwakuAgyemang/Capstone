@extends('layouts.app')

@section('content')


    <div class="container">
        <a href="{{route('collector.login')}}">Log In as a collector</a>
        <a href="{{route('collector.register')}}">Sign Up as a Collector</a>
    </div>




    <!--degree symbol = &deg; -->

@endsection
