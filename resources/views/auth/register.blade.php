@extends('layouts.app')

@section('content')
<style>
    body {
        color: #fff;
        background: #63738a;
        font-family: 'Roboto', sans-serif;
    }
    .form-control {
        height: 40px;
        box-shadow: none;
        color: #969fa4;
    }
    .form-control:focus {
        border-color: #5cb85c;
    }
    .form-control, .btn {
        border-radius: 3px;
    }
    .signup-form {
        width: 450px;
        margin: 0 auto;
        padding: 30px 0;
          font-size: 15px;
    }
    .signup-form h2 {
        color: #636363;
        margin: 0 0 15px;
        position: relative;
        text-align: center;
    }
    .signup-form h2:before, .signup-form h2:after {
        content: "";
        height: 2px;
        width: 30%;
        background: #d4d4d4;
        position: absolute;
        top: 50%;
        z-index: 2;
    }
    .signup-form h2:before {
        left: 0;
    }
    .signup-form h2:after {
        right: 0;
    }
    .signup-form .hint-text {
        color: #999;
        margin-bottom: 30px;
        text-align: center;
    }
    .signup-form form {
        color: #999;
        border-radius: 3px;
        margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .signup-form .form-group {
        margin-bottom: 20px;
    }
    .signup-form input[type="checkbox"] {
        margin-top: 3px;
    }
    .signup-form .btn {
        font-size: 16px;
        font-weight: bold;
        min-width: 140px;
        outline: none !important;
    }
    .signup-form .row div:first-child {
        padding-right: 10px;
    }
    .signup-form .row div:last-child {
        padding-left: 10px;
    }
    .signup-form a {
        color: #fff;
        text-decoration: underline;
    }
    .signup-form a:hover {
        text-decoration: none;
    }
    .signup-form form a {
        color: #5cb85c;
        text-decoration: none;
    }
    .signup-form form a:hover {
        text-decoration: underline;
    }
    </style>


    <div class="signup-form">
        <form action="{{route('register')}}" class="myform" method="post">
            @csrf
            <h2>Register</h2>
            <p class="hint-text">Create your account. It's free and only takes a minute.</p>
            <div class="form-group">
                <div class="row">
                    <div class="col "><input type="text" class="form-control @error('name') border-warning @enderror" name="name" placeholder="Name" value="{{old('name')}}"></div>
                </div>
                @error('name')
                    <div class="alert alert-danger alert-dismissible fade show mt-2">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="email" class="form-control @error('email') border-warning @enderror" name="email" placeholder="Email" value="{{old('email')}}" >
                @error('email')
                <div class="alert alert-danger alert-dismissible fade show mt-2">
                    {{$message}}
                </div>
                @enderror
            </div>
            <input type="hidden" name="latitude">
            <input type="hidden" name="longitude">
            <div class="form-group">
                <input type="password" class="form-control @error('password') border-warning @enderror" name="password" placeholder="Password" >
                @error('password')
                <div class="alert alert-danger alert-dismissible fade show mt-2">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control @error('password_confirmation') border-warning @enderror" name="password_confirmation" placeholder="Confirm Password" >
                @error('password_confirmation')
                <div class="alert alert-danger alert-dismissible fade show mt-2">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
            </div>
            <input type="hidden" name="user_role" value="1">
        </form>
        <div class="text-center">Already have an account? <a href="{{route('login')}}">Sign in</a></div>
    </div>
    <script>



        if('geolocation' in navigator){
            console.log('geolocation available');
            navigator.geolocation.getCurrentPosition((position) => {
                console.log(position);
                let latitude = position.coords.latitude;
                let longitude = position.coords.longitude;
                // $.get("https://maps.googleapis.com/maps/api/geocode/json?latlng=" + position.coords.latitude + "," + position.coords.longitude + "&sensor-false", function(data){
                //     console.log(data);
                // } )
                // var img = new Image();
                // img.src = "https://maps.googleapis.com/maps/api/staticmap?center=" + position.coords.latitude + "," + position.coords.longitude + "&zoom=13&size=800x400&sensor=false";
                // $('#output').html(img);
                // let googleMapURL = `https://maps.googleapis.com/maps/api/staticmap?center=${latitude},${longitude}&zoom=11&size=400x400`;
                // const mapImage = document.getElementById('mapImage');
                // mapImage.src = googleMapURL;
                document.querySelector('.myform input[name = "latitude"]').value = position.coords.latitude;
                document.querySelector('.myform input[name = "longitude"]').value = position.coords.longitude;
            });
            function showError(error){
                switch(error.code){
                    case error.PERMISSION_DENIED:
                        alert("You must Allow the Request for Geolocation");
                        location.reload();
                        break;
                }
            }

        }
        else{
            console.log('geolocation not available');
        };


    </script>

@endsection
