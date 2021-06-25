@extends('layouts.main', ['activePage' => 'comentarios', 'titlePage' => 'Comentarios'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <div class="card-title">Comentarios</div>
            <p class="card-category">Vista detallada {{ $comentario->id }}</p>
          </div>
          <!--body-->
          <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success" role="success">
              {{ session('success') }}
            </div>
            @endif
            <div class="row">
              <div class="col-md-4">
                <div class="card card-user">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <a href="#">
                          <img src="" alt="image" class="avatar">
                          <h5 class="title mt-3">{{ $comentario->id }}</h5>
                        </a>
                        <p class="description">
                        {{ $comentario->id}} <br>
                        {{ $comentario->director }} <br>
                        {{ $comentario->valoracion }} <br>
                        </p>
                      </div>
                    </p>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                    <a href="{{ route('comentario.edit', $comentario->id) }}" class="btn btn-sm btn-primary">Editar</i></a>
                    </div>
                  </div>
                </div>
              </div><!--end card user-->
              <div class="col-md-4">
                <div class="card card-user">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <a href="#" class="d-flex">
                          <img src="{{ asset('/img/default-avatar.png') }}" alt="image" class="avatar">
                          <h5 class="title mx-3">{{ $comentario->id }}</h5>
                        </a>
                        <p class="description">
                        {{ $comentario->id}} <br>
                        {{ $comentario->texto }} <br>
                        {{ $comentario->fecha_publicacion }} 
                        </p>
                      </div>
                    </p>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('comentario.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
                      <a href="{{ route('comentario.edit', $comentario->id) }}" class="btn btn-sm btn-primary">Editar</i></a>
                    </div>
                  </div>
                </div>
              </div><!--end card user 2-->

              <!--Start third-->
              <div class="col-md-4">
                <div class="card card-user">
                  <div class="card-body">
                    <table class="table table-bordered table-striped">
                      <tbody>
                        <tr>
                          <th>ID</th>
                          <td>{{ $comentario->id }}
                          </td>
                        </tr>
                        <tr>
                          <th>Texto</th>
                          <td>{{ $comentario->texto }}</td>
                        </tr>
                        <tr>
                          <th>Valoracion</th>
                          <td>{{ $comentario->fecha_publicacion}}</td>
                        </tr>
                        <tr>
                          <th>Pelicula id</th>
                          <td>{{ $comentario->peliculaId }}</td>
                        </tr>
                        <tr>
                          <th>Usuario Id</th>
                          <th>{{ $comentario->usuarioID}}</th>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('comentario.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
                      <a href="{{ route('comentario.edit', $comentario->id) }}" class="btn btn-sm btn-primary">Editar</i></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--end third-->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection