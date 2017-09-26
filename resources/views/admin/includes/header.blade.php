<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            @yield('title-page')
            <small>@yield('subtitle-page')</small>
        </h1>
        @hasSection('seccion-principal')
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-bars"></i>  <a href="{{ url('admin/') }}">Inicio</a>
            </li>
            <li>
                <i class="@yield('seccion-principal-icono')"></i>  <a href="@yield('seccion-principal-url')">@yield('seccion-principal')</a>
            </li>
            @hasSection('seccion-secundaria')
            <li>
                <i class="@yield('seccion-secundaria-icono')"></i>  <a href="@yield('seccion-secundaria-url')">@yield('seccion-secundaria')</a>
            </li>
            @endif
        </ol>
        @endif
    </div>
</div>
