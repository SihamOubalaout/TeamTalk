@extends('adminlte::page')
@section('title')
Profile
@endsection
@section('content')
    @php
        use Illuminate\Support\Facades\Auth;
        $user = Auth::user();
    @endphp
    <div class="profile">
        <h1>Profil de {{ $user->NomEmp }}</h1>
        <p><strong>Nom:</strong> {{ $user->NomEmp }}</p>
        <p><strong>Prénom:</strong> {{ $user->PrenomEmp }}</p>
        <p><strong>Poste:</strong> {{ $user->poste }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <!-- Ajoutez d'autres informations de profil selon vos besoins -->
    </div>
@endsection