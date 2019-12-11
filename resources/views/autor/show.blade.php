@extends('layout.layout')
@section('content')
<div class="col-4">
    <div class="card mt-2 text-center">
        <div class="card-header">
            Nombre : {{ $autor->nombre_autor}} 
        </div>
        <div class="card-body">
            Apellido : {{ $autor->apellido_autor }} 
            <br>
          
        </div>
        <div class="card-footer form-inline d-flex justify-content-center">
            <form action="/autor/{{$autor->id}}/edit">
                @method('GET')
                <button class="btn btn-success mr-1">EDITAR</button>
            </form>
            <form action="/autor/{{$autor->id}}" method="POST">                
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">ELIMINAR</button>
            </form>
        </div>
    </div>
</div>
@endsection 