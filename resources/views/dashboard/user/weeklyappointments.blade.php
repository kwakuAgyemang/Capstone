@extends('layouts.app')
@section('content')


<style>
    #appointment-form {
        width: 450px;
        margin: 0 auto;
        padding: 30px 0;
          font-size: 15px;
    }

</style>
<div class="container">
    <div class="mt-5">
        <div class="row">

                <div class="panel-body" id="appointment-form">
                    <h3>Add Weekly Collection Date</h3>
                    <form action="{{route('user.weeklyappointments')}}" method="post" >
                        @csrf
                        <div class="form-group">
                            <label for="">Pick Day</label>
                            <select class="form-select-lg mb-3 " name="day_of_week" id="" >

                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>
                            </select>
                        </div>
                        <label for="" class="mt-3">Please select a Collector</label>
                        <select class="form-select mt-1" name="collector_id" id="collectors">
                            @foreach ( $data as  $collector)
                                <option value="{{$collector->collector->id}}">{{$collector->collector->fname}}  {{$collector->collector->lname}}</option>
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

@endsection
