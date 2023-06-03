@extends('adminlte::page')
@section('title')
Modifier Profile
@endsection
@section('content_header')
    <h1>Modifier Profile<h1>
@endsection
@section('content')
<div class="container">
        @include('layouts.alert')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card my-5">
                <div class="card-header">
                   <div class="text-center font-weight-bold text-uppercase">
                        <H4>Modifier Profile</H4>
                    </div>
                </div> 
                <div class="card-body">
                <form action="{{ route('users.update2', $user->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group mb-3">
                            <label for="NomEmp">Nom</label>
                            <input type="text"  class="form-control rounded-0" name="NomEmp" placeholder="Nom" value="{{ $user->NomEmp}}" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="PrenomEmp">Prenom</label>
                            <input type="text"  class="form-control rounded-0" name="PrenomEmp" placeholder="Prenom" value="{{ $user->PrenomEmp }}" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="telephone">Telephone</label>
                            <input type="text"   class="form-control rounded-0" name="telephone" placeholder="Telephone" value="{{ $user->telephone }}" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="adresse">Adresse</label>
                            <input type="text"   class="form-control rounded-0" name="adresse" placeholder="Adresse" value="{{ $user->adresse }}" >
                        </div>
                        <div class="row">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-warning">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection