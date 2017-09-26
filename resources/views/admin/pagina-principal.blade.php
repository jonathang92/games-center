<!-- extiende del layout master -->
@extends('admin.includes.admin-master')

<!-- Titulo de la pagina -->
@section('title', 'Administrador web')

<!-- Titulo de la sección -->
@section('title-page', 'Pagina Principal')

<!-- Subtitulo de la sección -->
@section('subtitle-page', 'Editar información de la pagina principal')

@section('navbar-somos','active')


@section('seccion-principal','Pagina Principal')
@section('seccion-principal-url','/admin/pagina-principal')
@section('seccion-principal-icono','fa fa-home')

@section('content')

<!-- contenido -->
  <div class="row">
    <div class="col-lg-12">

        <form role="form" method="POST" action={{route('info.update', $info->id)}} enctype="multipart/form-data">
          <input type="hidden" name="_method" value="PUT">
          {{ csrf_field() }}
          <div class="form-group">
              <label>Título</label>
              <input name="titulo_principal" class="form-control" maxlength="100" required="" value="{{$info->titulo_principal}}">
              <p class="help-block">(100 caracteres).</p>
              @if($errors->has('titulo'))
              <span style="color:red;">{{ $errors->first('titulo') }}</span>
              @endif
          </div>
          <div class="form-group">
              <label>Contenido</label>
              <textarea name="info_principal" id="text-editor" class="form-control" rows="3" required="">{{$info->info_principal}}</textarea>
          </div>
            <div class="clearfix"></div>
            <div class="form-group botones-admin">
              <input type="hidden" name="info" value="pagina-principal">
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>

        </form>

    </div>
  </div>
<!-- //contenido -->
@endsection
