@extends('adminlte::page')

@section('title', 'HOME')

@section('content_header')
    <h1>Dashboard</h1>
@endsection
@section('content')
    @php
        use Illuminate\Support\Facades\Auth;
        $user = Auth::user();
    @endphp

    @if($user->isAdmin)
    <div class="container">
        <div class="row my-5">
            <div class="col-md-4">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ \App\Models\User::count() }}</h3>
                        <p>Employes</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <a href="{{ url('admin/users') }}" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-4">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ \App\Models\Departement::count() }}</h3>
                        <p>Departement</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <a href="{{ url('admin/departements') }}" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection
