@extends('layouts.Capp')

@section('content')
<style>
    .image-preview{
        width: 300px;
        min-height: 100px;
        border: 2px solid #dddddd;
        margin-top: 15px;

        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: #cccccc
    }
    .image-preview__image{
        display: none;
        width: 100%;
    }
    body {
        color: #fff;
        background: #050607;
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
        <form action="{{route('collector.create')}}" class="myform" method="post" enctype="multipart/form-data">
            @csrf
            <h2>Register</h2>
            <p class="hint-text">Create your account. It's free and only takes a minute.</p>
            <div class="form-group">
                <div class="row">
                    <div class="col "><input type="text" class="form-control @error('fname') border-warning @enderror" name="fname" placeholder="First Name" value="{{old('fname')}}"></div>
                </div>
                @error('fname')
                    <div class="alert alert-danger alert-dismissible fade show mt-2">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col "><input type="text" class="form-control @error('lname') border-warning @enderror" name="lname" placeholder="Last Name" value="{{old('lname')}}"></div>
                </div>
                @error('lname')
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
            <div class="form-group">
                <input type="text" class="form-control @error('vehicle_num') border-warning @enderror" name="vehicle_num" placeholder="Enter License plate number" value="{{old('vehicle_num')}}" >
                @error('vehicle_num')
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
                <input type="password" class="form-control @error('password_confirmation') border-warning @enderror" name="password_confirmation" placeholder="Confirm Password" >
                @error('password_confirmation')
                <div class="alert alert-danger alert-dismissible fade show mt-2">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Profile Picture</label>
                <input type="file" class="form-control-file" id="profile_pic" name="profile_pic">
                <div class="image-preview" id="imagePreview">
                    <img src="" alt="Image Preview" class="image-preview__image" id="image-preview__image">
                    <span class="image-preview__default-text" id="image-preview__default-text">Image Preview</span>
                </div>
            </div>

            <div class="form-group">
                <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
            </div>

        </form>
        <div class="text-center">Already have an account? <a href="{{route('collector.login')}}">Sign in</a></div>
    </div>


    <script>
        const inpFile = document.getElementById('profile_pic');
        const previewContainer = document.getElementById('imagePreview');
        const previewImage = previewContainer.querySelector('.image-preview__image');
        const previewDefaultText = previewContainer.querySelector('.image-preview__default-text');

        inpFile.addEventListener('change', function(){
            const file = this.files[0];

            //console.log(file);
            if(file){
                const reader = new FileReader();

                previewDefaultText.style.display = "none";
                previewImage.style.display = "block";

                reader.addEventListener('load', function(){
                    previewImage.setAttribute('src', this.result);
                });
                reader.readAsDataURL(file);
            }else{
                previewDefaultText.style.display = null;
                previewImage.style.display = null;
                previewImage.setAttribute('src', '');
            }
        });
    </script>


@endsection
