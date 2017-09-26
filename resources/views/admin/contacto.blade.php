<!-- extiende del layout master -->
@extends('admin.includes.admin-master')

<!-- Titulo de la pagina -->
@section('title', 'Administrador web')

<!-- Titulo de la sección -->
@section('title-page', 'Contacto')

<!-- Subtitulo de la sección -->
@section('subtitle-page', 'Editar información de contacto')

@section('navbar-somos','active')

@section('seccion-principal','Contacto')
@section('seccion-principal-url','/admin/contacto')
@section('seccion-principal-icono','fa fa-fw fa-globe')

@section('content')

<!-- contenido -->
  <div class="row">
    <div class="col-lg-12">

        <form role="form" method="POST" action={{route('info.update', $info->id)}} enctype="multipart/form-data">
          <input type="hidden" name="_method" value="PUT">
          {{ csrf_field() }}
          <div class="form-group">
              <label>Dirección de la empresa</label>
              <textarea name="direccion" class="form-control" rows="3" required="">{{$info->direccion}}</textarea>
          </div>
            <div class="clearfix"></div>
            <div class="form-group botones-admin">
              <input type="hidden" name="info" value="contacto">
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>

        </form>

    </div>
  </div>
<!-- //contenido -->
@endsection
