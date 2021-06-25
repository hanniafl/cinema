@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Detalles del usuario'])
@section('content')

     @if(isset($pelicula))
         {{-- Edicion de programa --}}
         <form action="{{ route('peliculas.update', $pelicula) }}" method="POST">
              @method('PATCH')
     @else
     {{-- Creacion de programa --}}
        <form action="{{ route('peliculas.store') }}" method="POST">
     @endif


        @csrf 
        <label for="titulo"> Titulo: </label>
        <input type="titulo" name="titulo" id="titulo" value="{{ $pelicula->titulo ?? '' }}">
        <br>     
        
        <label for="director"> Director: </label>
        <input type="director" name="director" id="director" value="{{ $pelicula->director ?? '' }}">
        <br>

        <label for="valoracion"> Valoracion </label>
        <input type="valoracion" name="valoracion" id="valoracion" value="{{ $pelicula->valoracion ?? '' }}">
        <br>

        <label for="resena"> Resena </label>
        <input type="resena" name="resena" id="resena" value="{{ $pelicula->resena ?? '' }}">
        <br>

        <label for="fecha_visto"> Fecha visto </label>
        <input type="fecha_visto" name="fecha_visto" id="fecha_visto" value="{{ $pelicula->fecha_visto ?? '' }}">
        <br>

        <label for="comentarios_id"> Id de comentario </label>
        <input type="comentarios_id" name="comentarios_id" id="comentarios_id" value="{{ $pelicula->comentarios_id ?? '' }}">
        <br>

        <input type="submit" value="Guardar">
        </form>

        <p>
        <a href="{{ route('peliculas.index') }}"> Listado de peliculas </a>
     </p>
@endsection 
