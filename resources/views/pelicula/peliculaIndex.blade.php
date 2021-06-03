@extends('layouts.temp')
@section('contenido')
     <h1>Listado de peliculas </h1>
     <p>
        <a href="{{ route('peliculas.create') }}"> Agregar Pelicula </a>
     </p>

<table border="1">
     <thead>
          <tr>
          <th>ID</th>
          <th>Titulo</th>
          <th>Director</th>
          <th>Valoracion</th>
          <th>Resena</th>
          <th>Fecha visto</th>
          <th>Comentarios id</th>
          <th>Acciones</th>
          </tr>
     </thead>
     <tbody>
         @foreach ($peliculas as $pelicula )
              <tr>
              <td><a href="{{route('peliculas.show', $pelicula->id) }}">{{ $pelicula->id}}</a></td>
              <td>{{ $pelicula->titulo}} </td>
              <td>{{ $pelicula->director}}</td>
              <td>{{ $pelicula->valoracion}}</td>
              <td>{{ $pelicula->resena}} </td>
              <td>{{ $pelicula->fecha_visto}} </td>
              <td>{{ $pelicula->comentarios_id}} </td>
              <td>
                 <a href="{{ route('peliculas.edit', $pelicula) }}">Editar</a>
              </td>
              </tr>
         @endforeach

     </tbody>


</table>
@endsection 