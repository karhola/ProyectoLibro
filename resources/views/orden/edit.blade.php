@extends('layout.layout')
@section('content')
    <p>EDITAR ORDEN</p>
    
    <form action="/orden/{{$orden->id}}" method="POST">
        @method('PUT')
        @csrf<!-- directiva para sifrar o ocultar datos -->
        <p>INGRESE LA FECHA</p>
        <input type="text" class="form-control" name="fecha" value="{{$orden->fecha}}">
        <p>INGRESE EL ID DEL CLIENTE</p>
        <input type="text" class="form-control" name="cliente_id" value="{{$orden->cliente_id}}">
        <p>INGRESE EL TIPO DE PAGO</p>
        <input type="text" class="form-control" name="tipo_pago" value="{{$orden->tipo_pago}}">
        
     <br>
        <button class="btn btn-primary" >ACTUALIZAR LA ORDEN</button>
    </form>
@endsection