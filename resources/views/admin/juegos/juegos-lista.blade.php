<!-- Subtitulo de la sección -->
@section('subtitle-page', 'Listo de juegos')

<!-- contenido -->
  <div class="row">
    <div class="col-lg-12">
      @if(session()->has('msj'))
        <div class="alert alert-success dismissible fade in custom-alert" role="alert">
          <a style="cursor:pointer;" class="close" data-dismiss="alert">&times;</a>{{ session('msj') }}
        </div>
      @elseif(session()->has('emsj'))
        <div class="alert alert-danger dismissible fade in custom-alert" role="alert">
          <a style="cursor:pointer;" class="close" data-dismiss="alert">&times;</a>{{ session('emsj') }}
        </div>
      @endif
        <div class="table-responsive col-lg-12">
          @if( count($juegos) == 0 )
          <h1>No Hay Juegos Agregados</h1>
          @else
            <table class="table table-bordered custom-table">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($juegos as $juego)
                    <tr>
                        <td>
                          {{$juego->titulo}}
                        </td>
                        <td>
                          <img style="max-width: 175px;" src="../images/juegos/{{$juego->urlImg}}" class="img-thumbnail img-responsive" alt="Sin Imagen" />
                        </td>
                        <td>
                          <a href="juegos/{{ $juego->id }}/edit" class="btn btn-warning  ">Modificar</a>
                          <br><br>
                          {!! Form::open(['route' => ['juegos.destroy' , $juego->id] , 'method' => 'delete' , 'class' => 'form-delete' ]) !!}
                            {!! Form::hidden('delete_juego', 'delete_juego') !!}
                            {!! Form::button('Eliminar', ['type' => 'submit' , 'class' => 'btn btn-primary']) !!}
                          {!! Form::close() !!}
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
          @endif
        </div>
    </div>
  </div>
<!-- //contenido -->
