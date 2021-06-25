@extends('layouts.main', ['activePage' => 'comentarios', 'titlePage' => 'Nuevo comentario'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('comentario.store') }}" method="post" class="form-horizontal">
          @csrf
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Comentario</h4>
              <p class="card-category">Ingresar datos</p>
            </div>
            <div class="card-body">
               @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
              @endif 
              <div class="row">
                <label for="titulo" class="col-sm-2 col-form-label">Texto</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="texto" placeholder="Ingrese su comentario" value="{{ old('texto') }}" autofocus>
                  @if ($errors->has('texto'))
                    <span class="error text-danger" for="input-texto">{{ $errors->first('texto') }}</span>
                  @endif
                </div>
              </div>

              <div class="row">
                <label for="fecha_publicacion" class="col-sm-2 col-form-label">Fecha publicacion</label>
                <div class="col-sm-7">
                  <input type="fecha_publicacion" class="form-control" name="fecha_publicacion" placeholder="Ingrese la fecha de publicacion" value="{{ old('fecha_publicacion') }}" autofocus>
                  @if ($errors->has('fecha_publicacion'))
                    <span class="error text-danger" for="input-fecha_publicacion">{{ $errors->first('fecha_publicacion') }}</span>
                  @endif
                </div>
              </div>

              <div class="row">
                <label for="peliculaId" class="col-sm-2 col-form-label">Pelicula ID</label>
                <div class="col-sm-7">
                  <input type="peliculaId" class="form-control" name="peliculaId" placeholder="Ingrese el id de la pelicula" value="{{ old('peliculaId') }}" autofocus>
                  @if ($errors->has('peliculaId'))
                    <span class="error text-danger" for="input-peliculaId">{{ $errors->first('peliculaId') }}</span>
                  @endif
                </div>
              </div>

            <div class="row">
                <label for="usuarioID" class="col-sm-2 col-form-label">usuarioID</label>
                <div class="col-sm-7">
                  <input type="usuarioID" class="form-control" name="usuarioID" placeholder="Ingrese el ID de usuario" value="{{ old('usuarioID') }}" autofocus>
                  @if ($errors->has('usuarioID'))
                    <span class="error text-danger" for="input-resena">{{ $errors->first('usuarioID') }}</span>
                  @endif
                </div>
              </div>
              </div>
            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            <!--End footer-->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection