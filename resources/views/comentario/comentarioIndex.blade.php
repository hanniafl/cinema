@extends('layouts.temp')
@section('contenido')
     <h1>Listado de comentarios </h1>
     <p>
        <a href="{{ route('comentario.create') }}"> Agregar comentario </a>
     </p>

<table border="1">
     <thead>
          <tr>
          <th>ID</th>
          <th>Texto</th>
          <th>Fecha publicacion</th>
          <th>PeliculaId</th>
          <th>UsuarioId</th>
          <th>Acciones</th>
          </tr>
     </thead>
     <tbody>
         @foreach ($comentarios as $comentario )
              <tr>
              <td><a href="{{route('comentario.show', $comentario->id) }}">{{ $comentario->id}}</a></td>
              <td>{{ $comentario->texto}} </td>
              <td>{{ $comentario->fecha_publicacion}}</td>
              <td>{{ $comentario->peliculaId}}</td>
              <td>{{ $comentario->usuarioID}} </td>
              <td>
                 <a href="{{ route('comentario.edit', $comentario) }}">Editar</a>
              </td>
              </tr>
         @endforeach

     </tbody>


</table>
@endsection 
