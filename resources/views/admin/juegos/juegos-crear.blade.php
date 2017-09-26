<!-- Subtitulo de la sección -->
@section('subtitle-page', 'Añadir nuevo Juego')

@section('seccion-secundaria','Añadir Nuevo Juego')
@section('seccion-secundaria-url','/admin/juegos/agregar')
@section('seccion-secundaria-icono','fa fa-plus fa-fw')

<!-- contenido -->
  <div class="row">
    <div class="col-lg-12">

        <form class="image-crop" role="form" method="POST" action={{url('admin/juegos')}} enctype="multipart/form-data">
          {{ csrf_field() }}
            <div class="form-group">
                <label>Nombre del Juego</label>
                <input name="titulo" class="form-control" maxlength="100" required="" id="titulo">
                <p class="help-block">(100 caracteres).</p>
                @if($errors->has('titulo'))
                <span style="color:red;">{{ $errors->first('titulo') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label>Cargar imagen</label>
                <div class="clearfix"></div>
                <div class=" row col-lg-6">
                  <div class="dropzone" data-width="600" data-height="600" data-ajax="false" style="width: 100%;">
                    <input type="file" name="urlImg" required=""/>
                  </div>
                </div>
                <div class="clearfix"></div>
                <p class="help-block"><strong>Resolución recomendada:</strong> 600 x 600 pixeles.</p>
            </div>
            <div class="form-group">
                <label>Información</label>
                <textarea name="informacion" id="text-editor" class="form-control" rows="3" required=""></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="reset" class="btn btn-warning">Reiniciar</button>

        </form>

    </div>
  </div>
<!-- //contenido -->
