@extends('adminlte::page')
@section('title')
Modifier Un Employe
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
                        <p class="heading">Modifier Un Employe</p>
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
                            <label for="telephone">Telephone</label>
                            <input type="text"  class="form-control rounded-0" name="telephone" placeholder="Telephone" value="{{ $user->telephone}}" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="adresse">Adresse</label>
                            <input type="text"  class="form-control rounded-0" name="adresse" placeholder="Adresse" value="{{ $user->adresse}}" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="text"   class="form-control rounded-0" name="email" placeholder="Email" value="{{ $user->email }}" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="id_departement">N° ID_Departement</label>
                            <input type="text"   class="form-control rounded-0" name="id_departement" placeholder="ID_Departement" value="{{ $user->id_departement }}">
                        </div>
                            <button class="btn p-1" style="width: 90px;" id="button">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection

@section('css')
<style>
    #button {
    position: relative;
    width: 100%;
    border: 2px solid #8000ff;
    background-color: #8000ff;
    height: 40px;
    color: white;
    font-size: .10em;
    font-weight: 800;
    letter-spacing: 1px;
    border-radius: 30px;
    margin: 40px;
    cursor: pointer;
    overflow: hidden;
    }

    #button {
    position: relative;
    width: 100%;
    height: 90px;
    border: 2px solid #8000ff;
    background-color: #8000ff;
    height: 40px;
    color: white;
    font-size: .9em;
    font-weight: 600;
    letter-spacing: 1px;
    border-radius: 10px;
    margin: 10px;
    cursor: pointer;
    overflow: hidden;
    }

    #button:hover::after {
    transform: translateX(600px);
    transition-duration: .5s;
    }
    .heading {
    font-size: 2.5em;
    color: #2e2e2e;
    font-weight: 700;
    margin: 15px 0 30px 0;
    }
</style>
@endsection