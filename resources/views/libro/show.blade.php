@extends('layout.layout')
@section('content')
<div class="col-4">
    <div class="card mt-2 text-center">
        <div class="card-header">
            {{ $libro->titulo}} {{ $libro->autor_id }}
        </div>
        <div class="card-body">
            Precio : {{ $libro->precio }} <br>
        
        </div>
        <div class="card-footer form-inline d-flex justify-content-center">
            <form action="/libro/{{$libro->id}}/edit">
                @method('GET')
                <button class="btn btn-success mr-1">EDITAR</button>
            </form>
            <form action="/libro/{{$libro->id}}" method="POST">                
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">ELIMINAR</button>
            </form>
        </div>
    </div>
</div>
@endsection 