@extends('layout.layout')

@section('content')
<div class="container">
    <form action="/orden_detalle" method="POST">

        @csrf
        <div class="form-group">
            <label for="">Eliga al cliente de la orden : </label>
            <select name="orden" class="custom-select">
                @foreach ($datos as $item)
                    <option value="{{$item->id}}">{{$item->tipo_pago}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
                <label for="">Eliga el libro : </label>
                <select name="libro" class="custom-select">
                    @foreach ($datos1 as $item)
                        <option value="{{$item->id}}">{{$item->titulo}}</option>
                        <option value="{{$item->id}}">{{$item->precio}}</option>
                    @endforeach
                </select>
        </div>
        <div class="form-group">
                <label for="">Precio : </label>
                <input type="text" class="form-control" name="precio_orden">
            </div>

        <div class="form-group">
            <label for="">Ingrese la cantidad : </label>
            <input type="text" class="form-control" name="cantidad">
        </div>
        <div class="form-group">
                <label for="">TOTAL : </label>
                <input type="text" class="form-control" name="total">
            </div>
          
        <button class="btn btn-primary">Guardar Orden</button>  
    </form>
</div>
@endsection