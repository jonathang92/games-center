<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('admin/') }}">@yield('nombre-admin')</a>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li @hasSection('navbar-principal') class="active" @endif>
                <a href="{{ url('admin/pagina-principal/') }}"><i class="fa fa-fw fa-home"></i> Pagina Principal</a>
            </li>
            <li @hasSection('navbar-nosotros') class="active" @endif>
                <a href="{{ url('admin/nosotros/') }}"><i class="fa fa-fw fa-users"></i> Nosotros</a>
            </li>
            <li  @hasSection('navbar-juegos') class="active" @endif>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo" ><i class="fa fa-gamepad fa-fw"></i> Juegos <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse  @hasSection('navbar-juegos') in @endif">
              <li>
                <a href="{{ url('admin/juegos') }}"><i class="fa fa-list fa-fw"></i> Listado de juegos</a>
              </li>
              <li>
                <a href="{{ url('admin/juegos/agregar') }}"><i class="fa fa-plus fa-fw"></i> Añadir nuevo juego</a>
              </li>
            </ul>
          </li>
          <li @hasSection('navbar-contacto') class="active" @endif>
              <a href="{{ url('admin/contacto/') }}"><i class="fa fa-fw fa-globe"></i> Contacto</a>
          </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
