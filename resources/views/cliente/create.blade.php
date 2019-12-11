@extends('layout.layout')
@section('content')
    <p>NUEVO CLIENTE</p>
    
    <form action="/cliente" method="POST">
        @csrf<!-- directiva para sifrar o ocultar datos -->
        <p>INGRESE SU NOMBRE</p>
        <input type="text" class="form-control" name="nombre_cli">
        <p>INGRESE SU APELLIDO</p>
        <input type="text" class="form-control" name="apellido_cli">
        <p>INGRESE SU TELEFONO</p>
        <input type="text" class="form-control" name="telefono_cli">
        <p>INGRESE SU EMAIL</p>
        <input type="text" class="form-control" name="email_cli">
        <br>
        <button class="btn btn-primary" >GUARDAR CLIENTE</button>
    </form>
@endsection