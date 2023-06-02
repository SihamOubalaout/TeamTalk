@extends('adminlte::page')

@section('title', 'Profile')

@section('content')
    @php
        use Illuminate\Support\Facades\Auth;
        $user = Auth::user();
    @endphp

    <div class="profile">
        @if(session('success'))
                <div class="alert alert-success ">
                    {{ session('success') }}
                </div>
        @endif
        <h1 class="text-center">Profil de {{ $user->NomEmp }}</h1>
        <div class="d-flex justify-content-center">
        <div class="table-responsive text-center">
                <table class="table table-bordered custom-table">
                    <tr>
                        <th>Nom</th>
                        <td>{{ $user->NomEmp }}</td>
                    </tr>
                    <tr>
                        <th>Prénom</th>
                        <td>{{ $user->PrenomEmp }}</td>
                    </tr>
                    <tr>
                        <th>Poste</th>
                        <td>{{ $user->poste }}</td>
                    </tr>
                    <tr>
                        <th>Adresse</th>
                        <td>{{ $user->adresse }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th>Telephone</th>
                        <td>{{ $user->telephone }}</td>
                    </tr>

                    <!-- Add other profile information as needed -->
                </table>
            </div>
        </div>
        <div class="text-center mt-4"> <!-- Add margin top -->
            <a href="{{ route('users.edit2')}}" class="btn btn-primary">Modifier le profil</a>
        </div>
    </div>

    <style>
        .custom-table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
        }

        .custom-table th,
        .custom-table td {
            padding: 20px;
            border: 2px solid;
            border-color: black;
        }

        .custom-table th {
            background-color: #eaeaea;
        }

        .custom-table td {
            text-align: center;
            border-width: 1px; /* épaisseur des bordures */
            border-style: solid; /* style des bordures */
            font-weight: light;

        }
        

    </style>
@endsection






