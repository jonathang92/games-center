<!-- extiende del layout master -->
@extends('admin.includes.admin-master')

<!-- Titulo de la pagina -->
@section('title', 'Administrador web')

<!-- Titulo de la sección -->
@section('title-page', 'Página Nosotros')

<!-- Subtitulo de la sección -->
@section('subtitle-page', 'Editar información de la página nosotros')

@section('navbar-nosotros','active')

@section('seccion-principal','Nosotros')
@section('seccion-principal-url','/admin/nosotros')
@section('seccion-principal-icono','fa fa-fw fa-users')

@section('content')

<!-- contenido -->
  <div class="row">
    <div class="col-lg-12">

        <form role="form" method="POST" action={{route('info.update', $info->id)}} enctype="multipart/form-data">
          <input type="hidden" name="_method" value="PUT">
          {{ csrf_field() }}
           <div class="form-group">
              <label>Pagina Nosotros</label>
              <textarea name="info_nosotros" id="text-editor" class="form-control" rows="3" required="">{{$info->info_nosotros}}</textarea>
          </div>
            <div class="clearfix"></div>
            <div class="form-group botones-admin">
              <input type="hidden" name="info" value="nosotros">
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>

        </form>

    </div>
  </div>
<!-- //contenido -->
@endsection
