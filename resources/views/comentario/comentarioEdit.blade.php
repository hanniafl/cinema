@extends('layouts.main', ['activePage' => 'comentarios', 'titlePage' => 'Editar comentario'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('comentario.update', $comentario->id) }}" method="post" class="form-horizontal">
          @csrf
          @method('PUT')
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Comentario</h4>
              <p class="card-category">Editar comentario</p>
            </div>
            <div class="card-body">
              <div class="row">
                <label for="texto" class="col-sm-2 col-form-label">Texto</label>
                <div class="col-sm-7">
                  <input type="texto" class="form-control" name="texto" value="{{ old('texto', $comentario->texto) }}" autofocus>
                  @if ($errors->has('texto'))
                    <span class="error text-danger" for="input-texto">{{ $errors->first('texto') }}</span>
                  @endif
                </div>
              </div>
    
              <div class="row">
                <label for="fecha_publicacion" class="col-sm-2 col-form-label">fecha de publicacion</label>
                <div class="col-sm-7">
                  <input type="fecha_publicacion" class="form-control" name="fecha_publicacion" value="{{ old('fecha_publicacion', $comentario->fecha_publicacion) }}">
                  @if ($errors->has('fecha_publicacion'))
                    <span class="error text-danger" for="input-fecha_publicacion">{{ $errors->first('fecha_publicacion') }}</span>
                  @endif
                </div>
              </div>

              <div class="row">
                <label for="peliculaId" class="col-sm-2 col-form-label">pelicula ID </label>
                <div class="col-sm-7">
                  <input type="peliculaId" class="form-control" name="peliculaId" value="{{ old('peliculaId', $comentario->peliculaId) }}">
                  @if ($errors->has('peliculaId'))
                    <span class="error text-danger" for="input-peliculaId">{{ $errors->first('peliculaId') }}</span>
                  @endif
                </div>
              </div>

            <div class="row">
                <label for="usuarioID" class="col-sm-2 col-form-label">usuarioID</label>
                <div class="col-sm-7">
                  <input type="usuarioID" class="form-control" name="usuarioID" value="{{ old('usuarioID', $comentario->usuarioID) }}">
                  @if ($errors->has('usuarioID'))
                    <span class="error text-danger" for="input-usuarioID">{{ $errors->first('usuarioID') }}</span>
                  @endif
                </div>
              </div>
              </div>

            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
            <!--End footer-->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection