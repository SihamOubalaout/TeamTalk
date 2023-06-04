@extends('adminlte::page')
@section('title', 'Reset Password')

@section('content')
<div class="container">
    <h4 class="card-title mt-4" style="color: black; font-size: 30px; text-align: center;">Reset Password</h4>
    <div class="row justify-content-md-center align-items-center mt-4">
        <div class="card">
            <div class="card-body">
                <form method="POST" class="my-login-validation" novalidate="" action="route('password.update', ['token' => $token])">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email" placeholder="Email address" value="{{ $email ?? old('email') }}">
                        <span class="text-danger">@error('email'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Enter new password">
                        <span class="text-danger">@error('password'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="password-confirm">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Enter confirm password">
                        <span class="text-danger">@error('password_confirmation'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group m-0">
                        <button type="submit" class="btn btn-primary btn-block">
                            Reset Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
        <div class="footer">
            &copy; 2021 &mdash; Your Company
        </div>
    </div>
</div>
@endsection




@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/my-login.css') }}">
    <style>
    .align-center {
        text-align: center;
    }
    </style>



@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/my-login.css') }}">
    <style>
    .align-center {
        text-align: center;
    }

    .title-container {
    display: inline;
    justify-content: left;
    align-items: left;
    height: 100vh;
    position: relative;
    top: 60%;
    left: 35%;
    transform: translate(-50%, -50%);
    z-index: 1;
    }

    </style>
@endsection

@section('js')
    <script src="{{ asset('js/my-login.js') }}"></script>
@endsection