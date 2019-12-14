@extends('layout.layout')
@section('content')
<div class="container bg-white border rounded shadow p-5 m-5">
    <div class="d-flex justify-content-between align-items-center">
        <p class="display-4">Lista de Orden de Libros</p>    
        <a href="/orden_detalle/create" class="btn btn-primary">Nuevo</a>
    </div> 
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Tipo de pago</th>
                <th scope="col">Titulo del libro</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Total</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->orden->tipo_pago }}</td>
                    <td>{{ $item->libro->titulo }}</td>
                    <td>{{ $item->cantidad }}</td>
                    <td>{{ $item->precio_orden }}</td>
                    <td>{{ $item->total }}</td>
                   
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>




@endsection