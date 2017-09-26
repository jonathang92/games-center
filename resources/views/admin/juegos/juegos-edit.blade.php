<!-- Subtitulo de la sección -->
@section('subtitle-page', 'Editar Juego')

<!-- contenido -->
  <div class="row">
    <div class="col-lg-12">

        {!! Form::open(['route' => ['juegos.update' , $juego->id] , 'method' => 'PUT']) !!}
          {{ csrf_field() }}
            <div class="form-group">
                <label>Nombre del Juego</label>
                <input name="titulo" class="form-control" maxlength="100" required="" id="titulo" value="{{$juego->titulo}}">
                <p class="help-block">(100 caracteres).</p>
                @if($errors->has('titulo'))
                <span style="color:red;">{{ $errors->first('titulo') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label>Cargar imagen</label>
                <div class="clearfix"></div>
                <div class=" row col-lg-6">
                  <div class="dropzone" data-width="600" data-height="600" data-ajax="false" style="width: 100%;" data-image="../../../images/juegos/{{$juego->urlImg}}">
                    <input type="file" name="urlImg"/>
                  </div>
                </div>
                <input type="hidden" name="current_img" value="{{ $juego->urlImg }}">
                <div class="clearfix"></div>
                <p class="help-block"><strong>Resolución recomendada:</strong> 600 x 600 pixeles.</p>
            </div>
            <div class="form-group">
                <label>Informacion</label>
                <textarea name="informacion" id="text-editor" class="form-control" rows="3" required="">{{$juego->info}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="reset" class="btn btn-warning">Reiniciar</button>

        {!! Form::close() !!}

    </div>
  </div>
<!-- //contenido -->
