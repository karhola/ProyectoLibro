@extends('layout.layout')
@section('content')
    <p>NUEVO AUTOR</p>
    
    <form action="/autor" method="POST">
        @csrf<!-- directiva para sifrar o ocultar datos -->
        <p>INGRESE EL NOMBRE</p>
        <input type="text" class="form-control" name="nombre_aut">
        <p>INGRESE EL APELLIDO</p>
        <input type="text" class="form-control" name="apellido_aut">
        <br>
        <button class="btn btn-primary" >GUARDAR AUTOR</button>
    </form>
@endsection