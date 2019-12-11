@extends('layout.layout')
@section('content')
    <p>EDITAR AUTOR</p>
    
    <form action="/autor/{{$autor->id}}" method="POST">
        @method('PUT')
        @csrf<!-- directiva para sifrar o ocultar datos -->
        <p>INGRESE EL NOMBRE DEL AUTOR</p>
        <input type="text" class="form-control" name="nombre_aut" value="{{$autor->nombre_autor}}">
        <p>INGRESE EL APELLIDO DEL AUTOR</p>
        <input type="text" class="form-control" name="apellido_aut" value="{{$autor->apellido_autor}}">
        
     <br>
        <button class="btn btn-primary" >ACTUALIZAR AUTOR</button>
    </form>
@endsection