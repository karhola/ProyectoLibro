@extends('layout.layout')
@section('content')
<div class="container bg-white border rounded shadow p-5 m-5">
    <div class="d-flex justify-content-between align-items-center">
        <p class="display-4">Lista de Libros</p>    
        <a href="/libro/create" class="btn btn-primary">Nuevo</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Titulo</th>
                <th scope="col">Nombre Autor</th>
                <th scope="col">Apellido Autor</th>
                <th scope="col">Precio</th>
                <th scope="col">EDITAR</th>
            </tr>
        </thead>
        <tbody>

            
            @foreach ($datos as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->titulo }}</td>
                    <td>{{ $item->autor->nombre_autor }}</td>
                    <td>{{ $item->autor->apellido_autor }}</td>
                    <td>{{ $item->precio }}</td>
                    <td><form action="/libro/{{$item->id}}">
                        @method('GET')
                        <button class="btn btn-primary">Ver libro</button>
                    </form></td>
                </tr>
            @endforeach
        </tbody>
    </table>
   <div class="row">
       <div class="col">
        <div class="fb-comments" data-href="https://m.facebook.com/story.php?story_fbid=1407935932705046&amp;id=2005073096190280" data-width="100%" data-numposts="5"></div>
       </div>
       <div class="col">           
          

        <iframe width="560" height="315" src="https://www.facebook.com/2005073096190280/videos/1407935932705046/?modal=admin_todo_tour" allowfullscreen></iframe>

    </div>
   </div>
</div>
@endsection