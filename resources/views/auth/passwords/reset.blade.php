@extends('adminlte::page')

@section('title', 'Reset Password')

@section('content')
<body class="my-login-page">
<div class="position-absolute top-0 start-0 w-100 h-100">
    <img class="img-fluid h-100 w-100" alt="..." src="/images/password.png">
</div>
    <div class="container">
        <section class="h-100">
            <div class="container h-100">
                <div class="row justify-content-md-center align-items-center h-100">
                    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
                        <div class="title-container">
                            <h4 class="card-title mt-4 align-center" style="color: black; font-size: 40px; position: relative; z-index: 1;">Reset Password</h4>
                        </div>
                        <div class="card my-5 ml-0 p-3">
                            <div class="card-body">
                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif
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
                        <div class="footer">
                            Copyright &copy; 2021 &mdash; Your Company
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

@endsection


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


