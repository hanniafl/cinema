@extends('layouts.main', ['activePage' => 'peliculas', 'titlePage' => 'Peliculas'])
@section('content')
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Peliculas</h4>
                    <p class="card-category">Lista de peliculas</p>
                  </div>
                  <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="success">
                      {{ session('success') }}
                    </div>
                    @endif
                    <div class="row">
                      <div class="col-12 text-right">
                        <a href="{{ route('peliculas.create') }}" class="btn btn-sm btn-facebook">Añadir pelicula</a>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary">
                          <th>Titulo</th>
                          <th>Director</th>
                          <th>Valoracion</th>
                          <th>Resena</th>
                          <th>Fecha visto</th>
                          <th class="text-right">Acciones</th>
                        </thead>
                        <tbody>
                          @foreach ($peliculas as $pelicula)
                            <tr>
                              <td>{{ $pelicula->titulo}}</td>
                              <td>{{ $pelicula->director}}</td>
                              <td>{{ $pelicula->valoracion}}</td>
                              <td>{{ $pelicula->resena}}</td>
                              <td>{{ $pelicula->fecha_visto}}</td>
                              <td class="td-actions text-right">
                                <a href="{{ route('peliculas.show', $pelicula->id) }}" class="btn btn-info"><i class="material-icons">person</i></a>
                                <a href="{{ route('peliculas.edit', $pelicula->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                <form action="{{ route('peliculas.destroy', $pelicula->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" rel="tooltip">
                                  <i class="material-icons">close</i>
                                </button>
                              </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card-footer mr-auto">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection 