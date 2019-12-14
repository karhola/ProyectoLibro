@extends('layout.layout')

@section('content')
<div class="container">
    <form action="/orden" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Eliga un cliente : </label>
            <select name="cliente" class="custom-select">
                @foreach ($datos as $item)
                    <option value="{{$item->id}}">{{$item->nombre_cliente}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Ingrese la Fecha : </label>
            <input type="text" class="form-control" name="fecha">
        </div>
        <div class="form-group">
            <label for="">Ingrese el Tipo de Pago : </label>
            <input type="text" class="form-control" name="tipo_pago">
        </div>
        <button class="btn btn-primary">Guardar Orden</button>  
    </form>
</div>
@endsection