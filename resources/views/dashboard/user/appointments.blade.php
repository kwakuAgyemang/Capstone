@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card mt-5">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    Add Collection Date
                </div>

                <div class="panel-body">
                    <h1></h1>
                    <form action="{{route('user.appointments')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Enter Date</label>
                            <input type="date" class="form-control" name="date" >
                        </div>
                        <label for="" class="mt-3">Please select a Collector</label>
                        <select class="form-select mt-1" name="collector_id" id="collectors">
                            @foreach ( $data as  $collector)
                                <option value="{{$collector->id}}">{{$collector->fname}} {{$collector->lname}}</option>
                            @endforeach

                        </select>

                        <div class="form-group">
                            <input type="text" name="house_number" class="form-control mt-3" id="" placeholder="Please enter your house number">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control mt-3" placeholder="Please enter the name of a landmark or popular location near you" name="landmark">
                        </div>
                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">


                        <button type="submit" class="btn btn-success mt-2">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
