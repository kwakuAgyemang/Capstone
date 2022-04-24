@extends('layouts.Capp')
@section('content')

<style>
    #update-form {
        width: 450px;
        margin: 0 auto;
        padding: 30px 0;
          font-size: 15px;
    }
</style>
<style>
    .avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
</style>

<div class="container container-fluid mt-5 align-items-center" id="update-form">
    <form action="{{route('collector.profile')}}" method="post">
        @csrf
        <div class="form-group mb-3">
            <input type="text" class="form-control @error('vehicle_num') border-warning @enderror" name="vehicle_num" placeholder="Enter License plate number" value="{{auth()->user()->vehicle_num}}" >
            @error('vehicle_num')
            <div class="alert alert-danger alert-dismissible fade show mt-2">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <input type="tel" id="phone" class="form-control @error('phone_num') border-warning @enderror" name="phone_num" placeholder="Phone Number" value="{{auth()->user()->phone_num}}" >
            @error('phone_num')
            <div class="alert alert-danger alert-dismissible fade show mt-2">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Areas you can collect in(Choose if you haven't already)</label><br>
        </div>
        <div class="form-check mb-3">
            @foreach ($area as $a)
                <input type="checkbox" name="areas[]" value="{{$a->id}}"> <label>{{$a->areaName}}</label><br>
            @endforeach

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Update</button>
        </div>

    </form>
</div>
<script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
        preferredCountries: ["gh"],
        initialCountry: "auto",
        geoIpLookup: getIp,
        utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
    const info = document.querySelector(".alert-info");
    function process(event) {
    event.preventDefault();

    const phoneNumber = phoneInput.getNumber();

    info.style.display = "";
    info.innerHTML = `Phone number in E.164 format: <strong>${phoneNumber}</strong>`;
    }
    function getIp(callback) {
        fetch('https://ipinfo.io/json?token=<your token>', { headers: { 'Accept': 'application/json' }})
        .then((resp) => resp.json())
        .catch(() => {
            return {
            country: "gh",
            };
        })
        .then((resp) => callback(resp.country));
    }

  </script>


@endsection
