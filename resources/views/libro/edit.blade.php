@extends('layout.layout')
@section('content')
    <p>EDITAR LIBRO</p>
    
    <form action="/libro/{{$libro->id}}" method="POST">
        @method('PUT')
        @csrf<!-- directiva para sifrar o ocultar datos -->
        <p>INGRESE EL TITULO DEL LIBRO</p>
        <input type="text" class="form-control" name="titulo" value="{{$libro->titulo}}">
        <p>INGRESE EL ID DEL AUTOR</p>
        <input type="text" class="form-control" name="autor_id" value="{{$libro->autor_id}}">
        <p>INGRESE EL PRECIO</p>
        <input type="text" class="form-control" name="precio" value="{{$libro->precio}}">
        
     <br>
        <button class="btn btn-primary" >ACTUALIZAR LIBRO</button>
    </form>
@endsection