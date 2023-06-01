@extends('adminlte::page')
@section('plugins.Datatables', true)
@section('title', 'LISTE DES DEPARTEMENTS')
@section('content_header')
    <h1>LISTE DES DEPARTEMENTS</h1>
@endsection
@section('content')
@php
    use App\Models\Departement;

    $departements = Departement::all();

@endphp
    <div class="container">
        <div class="row">
            @foreach($departements as $departement)
                <div class="col-md-4">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-header">{{ $departement['designation'] }}</div>
                        <div class="card-body">
                            <p>{{ $departement['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection