@extends('layout.layout')
@section('content')
<div class="d-flex justify-content-end">
    <a href="/cliente/create" class="btn btn-primary">Nuevo</a>
</div>
<div class="row">
    @foreach ($datos as $item)
        <div class="col-4">
            <div class="card mt-2">
                <div class="card-header">
                    {{ $item->nombre_cliente }} {{ $item->apellido_cliente }}
                </div>
                <div class="card-body">
                    Email : {{ $item->email }}
                </div>
                <div class="card-footer">
                    <form action="/cliente/{{$item->id}}">
                        @method('GET')
                        <button class="btn btn-primary">Ver Cliente</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection