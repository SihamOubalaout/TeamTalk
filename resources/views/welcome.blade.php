@extends('layouts.app')
@section('title')
    Welcome RADCOM
@endsection


@section('content')
    <div class="container-fluid p-0">
        <div class="card position-fixed top-50 start-30 bg-transparent border-0 p-5" style="width: 70%;">
            <div class="card-header bg-transparent">
                <h3>Welcome back</h3>
            </div>
            <div class="card-body">
                @guest
                    <a href="{{ url('/login') }}" class="btn btn-outline-primary">
                        Login
                    </a>
                @endguest
                @auth
                    <a href="{{ url('admin/home') }}" class="btn btn-outline-primary">
                        Home
                    </a>
                @endauth
            </div>
        </div>
    </div>
    <div class="container"card position-fixed>
    <div class="card position-fixed top-10 start-10 bg-transparent border-0 p-5">
        <p class="fs-1 fw-bolder text-center"> Connecting Teams, Empowering Collaboration: Your Internal Communication Solution</p>
    </div>
</div>

@endsection