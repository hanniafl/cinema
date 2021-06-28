@extends('layouts.temp')
@section('contenido')
     <h1>Formulario de comentarios</h1>

     @if ($errors->any())
       <div class="alert alert-danger">
            <ul>
                  @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                  @endforeach
            </ul>
         </div>
      @endif

     <p>
        <a href="{{ route('comentario.index') }}"> Listado de comentarios </a>
     </p>

     @if(isset($comentario))
         {{-- Edicion de programa --}}
         <form action="{{ route('comentario.update', $comentario) }}" method="POST">
              @method('PATCH')
     @else
     {{-- Creacion de programa --}}
        <form action="{{ route('comentario.store') }}" method="POST">
     @endif

        @csrf 
        <label for="texto"> Texto: </label>
        <input type="text" name="texto" id="texto" value="{{ old('texto') ?? $comentario->texto ?? '' }}">
        <br> 
        @error('texto')
            <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
         @enderror
        <br>      
        
        <label for="fecha_publicacion"> Fecha de publicacion: </label>
        <input type="text" name="fecha_publicacion" id="fecha_publicacion" value="{{ old('fecha_publicacion') ??  $comentario->fecha_publicacion ?? '' }}">
        <br>
        @error('fecha_publicacion')
            <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
         @enderror
        <br> 

        <label for="peliculaId"> PeliculaId </label>
        <input type="text" name="peliculaId" id="peliculaId" value="{{ old('peliculaId') ??  $comentario->peliculaId ?? '' }}">
        <br>
        @error('peliculaId')
            <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
         @enderror
        <br>

        <label for="usuarioID"> UsuarioID </label>
        <input type="text" name="usuarioID" id="usuarioID" value="{{ old('usuarioID') ??  $comentario->usuarioID ?? '' }}">
        <br>
        @error('usuarioID')
            <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
         @enderror
        <br>  
        
        <input type="submit" value="Guardar">
        </form>
@endsection 
