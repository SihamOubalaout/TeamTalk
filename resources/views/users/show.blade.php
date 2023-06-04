@extends('adminlte::page')
@section('title')
Afficher Employe
@endsection
@section('content_header')
@endsection
@section('content')
<div class="container">
    @include('layouts.alert')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card my-5">
                <div class="card-header">
                   <div class="text-center font-weight-bold text-uppercase">
                        <H3 class="heading">{{$user->NomEmp .' ' . $user->PrenomEmp}}</H3>
                    </div>
                </div> 
                <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="NomEmp">Nom</label>
                            <input type="text" disabled class="form-control rounded-0" name="NomEmp" placeholder="Nom" value="{{ $user->NomEmp}}" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="PrenomEmp">Prenom</label>
                            <input type="text" disabled class="form-control rounded-0" name="PrenomEmp" placeholder="Prenom" value="{{ $user->PrenomEmp }}" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="poste">Poste</label>
                            <input type="text" disabled class="form-control rounded-0" name="poste" placeholder="Poste" value="{{ $user->poste}}" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="telephone">Telephone</label>
                            <input type="text" disabled class="form-control rounded-0" name="telephone" placeholder="Telephone" value="{{ $user->telephone}}" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="adresse">Adresse</label>
                            <input type="text" disabled class="form-control rounded-0" name="adresse" placeholder="Adresse" value="{{ $user->adresse}}" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="text"  disabled class="form-control rounded-0" name="email" placeholder="Email" value="{{ $user->email }}" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="id_departement">N° ID_Departement</label>
                            <input type="text" disabled  class="form-control rounded-0" name="id_departement" placeholder="ID_Departement" value="{{ $user->id_departement }}" readonly>
                        </div>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection
@section('css')
<style>
      .heading {
    font-size: 2.5em;
    color: #2e2e2e;
    font-weight: 700;
    margin: 15px 0 30px 0;
    }
</style>
    
@endsection