@extends('layout.layout')
@section('content')
<div class="d-flex justify-content-end">
    <a href="/cliente/create" class="btn btn-primary">Nuevo</a>
</div>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">


    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/li1.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/li2.jpg') }}" class="d-block w-100" alt="...">
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

   

      <div class="carousel-item">
        <img src="{{ asset('img/li3.jpg') }}" class="d-block w-100" alt="...">
      </div>
    </div>


    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
   <div class="d-flex justify-content-end">
      <a href="/orden/create" class="btn btn-primary">REALIZAR ORDEN</a>
  </div>


@endsection