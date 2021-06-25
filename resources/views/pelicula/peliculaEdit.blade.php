@extends('layouts.main', ['activePage' => 'peliculas', 'titlePage' => 'Editar pelicula'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('peliculas.update', $pelicula->id) }}" method="post" class="form-horizontal">
          @csrf
          @method('PUT')
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Pelicula</h4>
              <p class="card-category">Editar pelicula</p>
            </div>
            <div class="card-body">
              <div class="row">
                <label for="titulo" class="col-sm-2 col-form-label">Titulo</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="titulo" value="{{ old('titulo', $pelicula->titulo) }}" autofocus>
                  @if ($errors->has('titulo'))
                    <span class="error text-danger" for="input-titulo">{{ $errors->first('titulo') }}</span>
                  @endif
                </div>
              </div>
    
              <div class="row">
                <label for="director" class="col-sm-2 col-form-label">Director</label>
                <div class="col-sm-7">
                  <input type="director" class="form-control" name="director" value="{{ old('director', $pelicula->director) }}">
                  @if ($errors->has('director'))
                    <span class="error text-danger" for="input-director">{{ $errors->first('director') }}</span>
                  @endif
                </div>
              </div>

              <div class="row">
                <label for="valoracion" class="col-sm-2 col-form-label">Valoracion</label>
                <div class="col-sm-7">
                  <input type="valoracion" class="form-control" name="valoracion" value="{{ old('valoracion', $pelicula->valoracion) }}">
                  @if ($errors->has('valoracion'))
                    <span class="error text-danger" for="input-valoracion">{{ $errors->first('valoracion') }}</span>
                  @endif
                </div>
              </div>

            <div class="row">
                <label for="resena" class="col-sm-2 col-form-label">Resena</label>
                <div class="col-sm-7">
                  <input type="resena" class="form-control" name="resena" value="{{ old('resena', $pelicula->resena) }}">
                  @if ($errors->has('resena'))
                    <span class="error text-danger" for="input-resena">{{ $errors->first('resena') }}</span>
                  @endif
                </div>
              </div>

            <div class="row">
                <label for="fecha_visto" class="col-sm-2 col-form-label">Fecha visto</label>
                <div class="col-sm-7">
                  <input type="fecha_visto" class="form-control" name="fecha_visto" value="{{ old('fecha_visto', $pelicula->fecha_visto) }}">
                  @if ($errors->has('fecha_visto'))
                    <span class="error text-danger" for="input-fecha_visto">{{ $errors->first('fecha_visto') }}</span>
                  @endif
                </div>
              </div>

            <div class="row">
                <label for="comentarios_id" class="col-sm-2 col-form-label">Comentarios id</label>
                <div class="col-sm-7">
                  <input type="comentarios_id" class="form-control" name="comentarios_id" value="{{ old('comentarios_id', $pelicula->comentarios_id) }}">
                  @if ($errors->has('comentarios_id'))
                    <span class="error text-danger" for="input-comentarios_id">{{ $errors->first('comentarios_id') }}</span>
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