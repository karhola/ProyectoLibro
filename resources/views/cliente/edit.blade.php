@extends('layout.layout')
@section('content')
    <p>EDITAR CLIENTE</p>
    
    <form action="/cliente/{{$cliente->id}}" method="POST">
        @method('PUT')
        @csrf<!-- directiva para sifrar o ocultar datos -->
        <p>INGRESE EL NOMBRE DEL INGRESO</p>
        <input type="text" class="form-control" name="nombre_cli" value="{{$cliente->nombre_cliente}}">
        <p>INGRESE LA FECHA</p>
        <input type="text" class="form-control" name="apellido_cli" value="{{$cliente->apellido_cliente}}">
        <p>INGRESE LA DESCRIPCION</p>
        <input type="text" class="form-control" name="telefono_cli" value="{{$cliente->telefono}}">
        <p>INGRESE EL MONTO</p>
        <input type="text" class="form-control" name="email_cli" value="{{$cliente->email}}">
     <br>
        <button class="btn btn-primary" >ACTUALIZAR CLIENTE</button>
    </form>
@endsection