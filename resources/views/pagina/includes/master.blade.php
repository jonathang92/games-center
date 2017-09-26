<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
@include('pagina.includes.head')
<body>
    <!--header-->
    @include('pagina.includes.header')

		<!--content-->
		@yield('content')

    @include('pagina.includes.footer')

</body>
</html>
