@extends('adminlte::page')
@section('title')
Modifier Un Employe
@endsection
@section('content_header')
    <h1>Modifier Un Employe<h1>
@endsection
@section('content')
<div class="container">
        @include('layouts.alert')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card my-5">
                <div class="card-header">
                   <div class="text-center font-weight-bold text-uppercase">
                        <H4>Modifier Un Employe</H4>
                    </div>
                </div> 
                <div class="card-body">
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="NomEmp">Nom</label>
                            <input type="text"  class="form-control rounded-0" name="NomEmp" placeholder="Nom" value="{{ $user->NomEmp}}" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="PrenomEmp">Prenom</label>
                            <input type="text"  class="form-control rounded-0" name="PrenomEmp" placeholder="Prenom" value="{{ $user->PrenomEmp }}" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="poste">Poste</label>
                            <input type="text"  class="form-control rounded-0" name="poste" placeholder="Poste" value="{{ $user->poste}}" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="text"   class="form-control rounded-0" name="email" placeholder="Email" value="{{ $user->email }}" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="id_departement">N° ID_Departement</label>
                            <input type="text"   class="form-control rounded-0" name="id_departement" placeholder="ID_Departement" value="{{ $user->id_departement }}">
                        </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-grid">
                                <button class="btn btn-warning">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection

