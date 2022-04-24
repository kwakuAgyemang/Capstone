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

                <div class="panel-body">

                    <form action="{{route('user.appointments')}}" method="post" id="appointment-form">
                        @csrf
                        <h3>
                            Add Collection Date
                        </h3>
                        <div class="form-group">
                            <label for="">Enter Date</label>
                            <input type="date" class="form-control" name="date" >
                        </div>


                        <div class="form-group">
                            <label for="" class="">Please select a Collector</label><br>
                            <select  class="form-select-lg mb-3 " id="" name="collector_id" id="collectors">
                                @foreach ( $data as  $collector)
                                    <option   value="{{$collector->collector->id}}">{{$collector->collector->fname}} {{$collector->collector->lname}}</option>
                                @endforeach

                            </select>
                        </div>


                        <div class="form-group">
                            <input type="text" name="house_number" class="form-control" id="" placeholder="Please enter your house number">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>


@endsection
