@extends('layout.layout')
@section('content')
<div class="container bg-white border rounded shadow p-5 m-5">
    <div class="d-flex justify-content-between align-items-center">
        <p class="display-4">Lista de Ordenes</p>    
        <a href="/orden/create" class="btn btn-primary">Nuevo</a>
    </div> 
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">fecha</th>
                <th scope="col">Nombre Cliente</th>
                <th scope="col">Apellido Cliente</th>
                <th scope="col">Tipo de pago</th>
                <th scope="col">EDITAR</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->fecha }}</td>
                    <td>{{ $item->cliente->nombre_cliente }}</td>
                    <td>{{ $item->cliente->apellido_cliente }}</td>
                    <td>{{ $item->tipo_pago }}</td>
                    <td><form action="/orden/{{$item->id}}">
                        @method('GET')
                        <button class="btn btn-primary">Ver Orden</button>
                    </form></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-end">
        <a href="/orden_detalle/create" class="btn btn-primary">CONFIRMAR ORDEN</a>
    </div>

</div>

@endsection