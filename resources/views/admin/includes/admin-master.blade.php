@section('nombre-admin','Administración Games Center')
<!DOCTYPE html>
<html lang="es">

@include('admin.includes.head')

<body>

    <div id="wrapper">

      @include('admin.includes.navbar')

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                @include('admin.includes.header')
                <!-- /.row -->
                @yield('content')
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    @include('admin.includes.footer-scripts')
    @yield('scripts')
</body>

</html>
