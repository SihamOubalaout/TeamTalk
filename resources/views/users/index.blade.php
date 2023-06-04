@extends('adminlte::page')
@section('plugins.Datatables',true)
@section('title')
LISTE DES EMPLOYES
@endsection
@section('content_header')
@endsection
@section('content')
<<<<<<< HEAD
<div class="container" style="max-width: 1050px; ">
=======
<div class="container" style="max-width: 910px; ">
>>>>>>> 035288661aab21a2ca733bf2a0c5b7e1c04a57ee
    <div class="row">
        <div class="col-md-10 mx-auto"> 
            <div class="card my-5">
                <div class="card-header" >
                   <div class="text-center font-weight-bold text-uppercase">
                   <p class="heading">LISTE DES EMPLOYES</p>
                    </div> 
                </div>
                <hr />
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <div class="card-body" >
                    <table id="myTable" class="table table-bordered table-stripped table-rounded">
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
                                        <a href="{{ route('users.show', $emp->id) }}" class="mr-0 " role="button">
                                            <button class="btn p-1" style="width: 70px;" id="button">Details</button>
                                        </a>
                                        <a href="{{ route('users.edit', $emp->id)}}" class="mr-0" role="button">
                                            <button class="btn p-1" style="width: 70px;" id="button">Edit</button>
                                        </a>
                                        <form action="{{ route('users.destroy', $emp->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="mr-2">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn p-1"  style="width: 70px;" id="button">Delete</button>
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


@endsection

@section('js')
<script>
$(document).ready(function(){
    $('#myTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'pdf',
                customize: function(doc) {
                    // Remove the sixth column
                    doc.content[1].table.body.forEach(function(row) {
                        row.splice(5, 1); // Remove the sixth column
                    });
                    doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                    doc.styles.table = {
                        alignment: 'center',
                        fontSize: 12
                    };
                    doc.defaultStyle.fontSize = 10;

                }
            },
            'copy', 'excel', 'csv', 'print', 'colvis'
        ]
    });
});
</script>

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


