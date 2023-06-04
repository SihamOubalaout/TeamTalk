@extends('adminlte::page')

@section('title', 'HOME')

@section('content_header')
    <h1>Dashboard</h1>
@endsection

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @php
        use Illuminate\Support\Facades\Auth;
        $user = Auth::user();
    @endphp


    <div class="container">
        <div class="row my-3">
            <div class="col-md-4">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ \App\Models\User::count() }}</h3>
                        <p>Employees</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    @if($user->isAdmin)
                    <a href="{{ url('admin/users') }}" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    @else
                    <a href="{{ url('/profiles') }}" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ \App\Models\Departement::count() }}</h3>
                        <p>Announcements</p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-bullhorn"></i>

                    </div>
                    <a href="{{ url('admin/departements') }}" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        
        <div class="col-md-4">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ \App\Models\Departement::count() }}</h3>
                        <p>Departments</p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-building"></i>

                    </div>
                    <a href="{{ url('admin/departements') }}" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    

    <div class="text-center">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-4 offset-md-4">
                    <div class="small-box bg-info">
                    <div class="icon">
                    <i class="fas fa-comments"></i>

                    </div>
                        <div class="inner">
                            <p>Messaging box</p>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('/master') }}" class="btn btn-default btn-flat"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
