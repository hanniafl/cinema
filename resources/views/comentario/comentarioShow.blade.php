@extends('layouts.temp')
@section('contenido')
    <h1>Detalle del comentario</h1>

    <p>
        <a href="{{ route('comentario.index') }}"> Listado de comentarios </a>
    </p>

    <table border="1">
     <thead>
          <tr>
          <th>ID</th>
          <th>Texto</th>
          <th>Fecha publicacion</th>
          <th>PeliculaId</th>
          <th>UsuarioId</th>
          </tr>
     </thead>
     <tbody>
         
              <tr>
              <td>{{ $comentario->id}} </td>
              <td>{{ $comentario->texto}} </td>
              <td>{{ $comentario->fecha_publicacion}}</td>
              <td>{{ $comentario->peliculaId}}</td>
              <td>{{ $comentario->usuarioID}} </td>
              
              </tr>

     </tbody>
</table>

    <form action="{{ route('comentario.destroy', $comentario) }}" method="POST">
          @csrf 
          @method('DELETE')
          <input type="submit" value="Eliminar programa">
    </form>
@endsection 
