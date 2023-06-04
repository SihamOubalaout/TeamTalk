@extends('adminlte::page')

@section('title', 'Profile')

@section('content')
    @php
        use Illuminate\Support\Facades\Auth;
        $user = Auth::user();
    @endphp

    @if(session('success'))
        <div class="alert alert-success ">
            {{ session('success') }}
        </div>
    @endif
    <h1 class="text-center">Profil de {{ $user->NomEmp }}</h1>
    <div class="container">
        <div class="card">
            <div class="card-border-top">
            </div>
            <div class="img"></div>
            <span>{{ $user->NomEmp }} {{ $user->PrenomEmp }} </span>
            <span class="job"><strong>Job:</strong>{{ $user->poste }}</span>
            <p class="email"><strong>Email:</strong>{{ $user->email }}</p>
            <p class="phone"><strong>Phone:</strong>{{ $user->telephone }}</p>
            <button> Chat</button>
        </div>
        </div>
        <div class="text-center mt-4"> <!-- Add margin top -->
            <a href="{{ route('users.edit2')}}" class="btn btn-primary">Modifier le profil</a>
        </div>
 

@endsection

@section('css')
<style>
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 50vh;
}
.card {
 width: 350px;
 height: 350px;
 background: #17a2b8;
 border-radius: 15px;
 box-shadow: 1px 5px 60px 0px #100a886b;
}


.card span {
 font-weight: 600;
 color: white;
 text-align: center;
 display: block;
 padding-top: 10px;
 font-size: 16px;
}

.card .job {
 font-weight: 400;
 color: white;
 display: flex;
 text-align: block;
 padding-top: 10px;
 font-size: 14px;
 margin:5px;
}
.card .email {
 font-weight: 400;
 color: white;
 display: block;
 text-align:flex;
 padding-top: 16px;
 font-size: 14px;
 margin:5px;
}
.card .phone {
 font-weight: 400;
 color: white;
 display: block;
 text-align: flex;
 padding-top: 10px;
 font-size: 14px;
 margin:5px;
}

.card .img {
 width: 70px;
 height: 80px;
 background: #5b5b5b;
 border-radius: 15px;
 margin: auto;
 margin-top: 25px;
}

.card button {
 padding: 8px 25px;
 display: block;
 margin: auto;
 border-radius: 8px;
 border: none;
 margin-top: 30px;
 background: #5b5b5b;
 color: white;
 font-weight: 600;
}

.card button:hover {
 background: #5b5b5b;
}
</style>
    
@endsection






