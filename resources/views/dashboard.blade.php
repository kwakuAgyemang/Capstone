@extends('layouts.app')
@section('content')

<div class="jumbotron">
    <div class="container mt-5">
        <h1 class="display-4">Welcome To Aboboya Express</h1>



    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        Add Collection Date
                    </div>

                    <div class="panel-body">
                        <h1></h1>
                        <form action="{{route('appointment')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Enter Date</label>
                                <input type="date" class="form-control" name="collect_date" >
                            </div>
                            <label for="" class="mt-3">Please select a Collector</label>
                            <select class="form-select mt-1" name="collectors" id="collectors">
                                @foreach ( session('data') as  $collector)
                                    <option value="{{$collector->id}}">{{$collector->name}}</option>
                                @endforeach

                            </select>
                            <label for="" class="mt-3">Do you want it just once or every week</label>
                            <select name="schedule" class="form-select mt-1"  id="">
                                <option value="1">Once</option>
                                <option value="2">Weekly</option>
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
