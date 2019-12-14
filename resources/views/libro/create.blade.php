@extends('layout.layout')

@section('content')
<div class="container">
    <form action="/libro" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Eliga un autor : </label>
            <select name="autor" class="custom-select">
                @foreach ($datos as $item)
                    <option value="{{$item->id}}">{{$item->nombre_autor}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Ingrese el Titulo : </label>
            <input type="text" class="form-control" name="titulo">
        </div>
        <div class="form-group">
            <label for="">Ingrese el Precio : </label>
            <input type="text" class="form-control" name="precio">
        </div>
        <button class="btn btn-primary">Guardar libro</button>  
    </form>
</div>
@endsection