@extends('layouts.app')
@section('content')
<div class="jumbotron">
    <div class="container">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        <ul>
            <li>
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </li>
        </ul>
    </div>

  </div>
@endsection
