@extends('adminlte::page')
@section('plugins.Datatables',true)
@section('title')
LISTE DES EMPLOYES
@endsection
@section('content_header')
@endsection
@section('content')
<div class="card my-5" style="background-image: url('{{ asset('images/employes.jpg') }}'); background-size: cover; background-repeat: no-repeat; background-position: center; background-size: 100% 100%;">
<div class="container" style="max-width: 910px; ">
    <div class="row">
        <div class="col-md-10 mx-auto">
        
            <div class="card my-5">
                <div class="card-header" >
                   <div class="text-center font-weight-bold text-uppercase">
                   <h4 style="text-align: center; color: black; font-family: Montserrat, sans-serif;">LISTE DES EMPLOYES</h4>
                    </div> 
                </div>
                <hr />
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <div class="card-body" >
                    <table id="myTable" class="table table-bordered table-stripped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NOM</th>
                                <th>PRENOM</th>
                                <th>POSTE</th>
                                <th>Email</th>
                                <th></th>
                            </tr>        
                        </thead>
                        <tbody>
                            @if($user->count() > 0)
                                @foreach($user as $emp)
                                    <tr>
                                        <td class="align-middle">{{ $loop->iteration }}</td>
                                        <td class="align-middle">{{ $emp->NomEmp}}</td>
                                        <td class="align-middle">{{ $emp->PrenomEmp}}</td>
                                        <td class="align-middle">{{ $emp->poste}}</td> 
                                        <td class="align-middle">{{$emp->email}}</td> 
                                        <td class="align-middle">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('users.show', $emp->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                                <a href="{{ route('users.edit', $emp->id)}}" type="button" class="btn btn-warning">Edit</a>
                                                <form action="{{ route('users.destroy', $emp->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger m-0">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td class="text-center" colspan="5">Employe not found</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
        </div> 
    </div>
</div>

@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $('#myTable').DataTable({
                dom: 'Bfrtip',
                buttons : [
                    'copy','excel','csv','pdf','print','colvis'
                ]

            });
        });
    </script>
@endsection

