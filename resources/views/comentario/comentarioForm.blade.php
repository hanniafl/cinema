@extends('layouts.temp')
@section('contenido')
     <h1>Formulario de comentarios</h1>

     <p>
        <a href="{{ route('comentario.index') }}"> Listado de comentarios </a>
     </p>

     @if(isset($comentario))
         <form action="{{ route('comentario.update') }}" method="POST">
     @else
        <form action="{{ route('comentario.store') }}" method="POST">
     @endif

        @csrf 
        <label for="texto"> Texto: </label>
        <input type="text" name="texto" id="texto">
        <br>     
        
        <label for="fecha_publicacion"> Fecha de publicacion: </label>
        <input type="text" name="fecha_publicacion" id="fecha_publicacion">
        <br>

        <label for="peliculaId"> PeliculaId </label>
        <input type="text" name="peliculaId" id="peliculaId">
        <br>

        <label for="usuarioID"> UsuarioID </label>
        <input type="text" name="usuarioID" id="usuarioID">
        <br>
        <input type="submit" value="Guardar">
        </form>
@endsection 
