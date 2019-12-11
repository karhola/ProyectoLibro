@extends('layout.layout')
@section('content')
<div class="d-flex justify-content-end">
    <a href="/autor/create" class="btn btn-primary">Nuevo</a>
</div>
<div class="row">
    @foreach ($datos as $item)
        <div class="col-4">
            <div class="card mt-2">
                <div class="card-header">
                    Nombre : {{ $item->nombre_autor }} 
                </div>
                <div class="card-body">
                    Apellido : {{ $item->apellido_autor }}
                </div>
                <div class="card-footer">
                    <form action="/autor/{{$item->id}}">
                        @method('GET')
                        <button class="btn btn-primary">Ver Autor</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection