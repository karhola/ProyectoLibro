@extends('layout.layout')
@section('content')
<div class="col-4">
    <div class="card mt-2 text-center">
        <div class="card-header">
            {{ $cliente->nombre_cliente}} {{ $cliente->apellido_cliente }}
        </div>
        <div class="card-body">
            Telefono : {{ $cliente->telefono }} <br>
            Email : {{ $cliente->email }} <br>
        </div>
        <div class="card-footer form-inline d-flex justify-content-center">
            <form action="/cliente/{{$cliente->id}}/edit">
                @method('GET')
                <button class="btn btn-success mr-1">EDITAR</button>
            </form>
            <form action="/cliente/{{$cliente->id}}" method="POST">                
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">ELIMINAR</button>
            </form>
        </div>
    </div>
</div>
@endsection 