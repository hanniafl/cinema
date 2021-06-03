@extends('layouts.temp')
@section('contenido')
    <h1>Detalle de la pelicula </h1>

    <p>
        <a href="{{ route('peliculas.index') }}"> Listado de peliculas </a>
    </p>

    <table border="1">
     <thead>
          <tr>
          <th>ID</th>
          <th>Titulo</th>
          <th>Director</th>
          <th>Valoracion</th>
          <th>Resena</th>
          <th>Fecha Visto</th>
          <th>Comentarios id</th>
          </tr>
     </thead>
     <tbody>
         
              <tr>
              <td>{{ $pelicula->id}} </td>
              <td>{{ $pelicula->titulo}} </td>
              <td>{{ $pelicula->director}}</td>
              <td>{{ $pelicula->valoracion}}</td>
              <td>{{ $pelicula->resena}} </td>
              <td>{{ $pelicula->fecha_visto}} </td>
              <td>{{ $pelicula->comentarios_id}} </td>
              
              </tr>

     </tbody>
</table>

    <form action="{{ route('peliculas.destroy', $pelicula) }}" method="POST">
          @csrf 
          @method('DELETE')
          <input type="submit" value="Eliminar pelicula">
    </form>
@endsection 