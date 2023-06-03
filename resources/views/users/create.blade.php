@extends('adminlte::page')
@section('title')
Ajouter Un Nouveau Employe
@endsection
@section('content_header')
    <h1>Ajouter Un Nouveau Employe<h1>
@endsection
@section('content')
<div class="container">
    @include('layouts.alert')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card my-5">
                <div class="card-header">
                   <div class="text-center font-weight-bold text-uppercase">
                        <H4>Ajouter Un Nouveau Employe</H4>
                    </div>
                </div> 
                <div class="card-body">
                    <form action="{{ route('users.store')}}" method="POST" class="mt-3" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <div class="col">
                                <input type="text" class="form-control" name="NomEmp" placeholder="Nom">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="col">
                                <input type="text" class="form-control" name="PrenomEmp" placeholder="Prenom" >
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="col">
                                <input type="text" class="form-control" name="poste" placeholder="Poste">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="col">
                                <input type="text" class="form-control" name="telephone" placeholder="Telephone">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="col">
                                <input type="text" class="form-control" name="adresse" placeholder="Adresse">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="col">
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="col">
                                <input type="text" class="form-control" name="password" placeholder="Mot de passe">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="col">
                                <input type="number" class="form-control" name="id_departement" placeholder="N° ID_Departement" >
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection

