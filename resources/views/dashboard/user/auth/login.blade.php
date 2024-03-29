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


    <div class="signup-form">
        <form action="{{route('user.login')}}" method="post">
            @csrf
            @if (session('status'))
            <div class="alert alert-danger alert-dismissible fade show mt-2">
                {{session('status')}}
            </div>
            @endif
            <h2>Login</h2>
            <div class="form-group">
                <input type="email" class="form-control @error('email') border-warning @enderror" name="email" placeholder="Email" value="{{old('email')}}" >
                @error('email')
                <div class="alert alert-danger alert-dismissible fade show mt-2">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control @error('password') border-warning @enderror" name="password" placeholder="Password" >
                @error('password')
                <div class="alert alert-danger alert-dismissible fade show mt-2">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
            </div>
        </form>

    </div>

@endsection
