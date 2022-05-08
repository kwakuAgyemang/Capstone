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
    @media screen and (max-width: 420px){
        #signup-form {
            width: 370px;
            margin: 0 auto;
            padding: 30px 0;
            font-size: 15px;
        }
    }
    @media screen and (max-width: 280px){
        #signup-form {
            width: 270px;
            margin: 0 auto;
            padding: 30px 0;
            font-size: 15px;
        }
    }
    @media screen and (max-width: 768px){
        #signup-form {
            width: 70%;
            margin: 0 auto;
            padding: 30px 0;
            font-size: 15px;

        }
    }
    @media screen and (max-width: 1000px){
        #signup-form {
            width: 70%;
            margin: 0 auto;
            padding: 30px 0;
            font-size: 15px;

        }
    }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>




    <div class="signup-form">
        <form action="{{route('user.create')}}" class="myform" method="post">

            @csrf
            <h2>Register</h2>
            <p class="hint-text">Create your account. It's free and only takes a minute.</p>
            <div class="form-group">
                <div class="row">
                    <div class="col "><input type="text" class="form-control @error('name') border-warning @enderror" name="name" placeholder="Name" value="{{old('name')}}" required></div>
                </div>
                @error('name')
                    <div class="alert alert-danger alert-dismissible fade show mt-2">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="email" class="form-control @error('email') border-warning @enderror" name="email" placeholder="Email" value="{{old('email')}}" required>
                @error('email')
                <div class="alert alert-danger alert-dismissible fade show mt-2">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <input type="tel" id="phone" class="form-control @error('phone_num') border-warning @enderror" name="phone_num" placeholder="Phone Number" value="{{old('phone_num')}}" required>
                @error('phone_num')
                <div class="alert alert-danger alert-dismissible fade show mt-2">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="area">Area</label>
                <select name="area" id="" class="form-control @error('password') border-warning @enderror"  required>
                    @foreach ( $area as $a )
                        <option value="{{$a->id}}">{{$a->areaName}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <input type="password" class="form-control @error('password') border-warning @enderror" name="password" placeholder="Password" required>
                @error('password')
                <div class="alert alert-danger alert-dismissible fade show mt-2">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <input type="password" class="form-control @error('password_confirmation') border-warning @enderror" name="password_confirmation" placeholder="Confirm Password" required>
                @error('password_confirmation')
                <div class="alert alert-danger alert-dismissible fade show mt-2">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
            </div>

        </form>
        <div class="text-center">Already have an account? <a href="{{route('user.login')}}">Sign in</a></div>
    </div>


    <script>
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
            preferredCountries: ["gh"],
            initialCountry: "auto",
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
            fetch('https://ipinfo.io/json?token=fdbfb986b3c87a', { headers: { 'Accept': 'application/json' }})
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
