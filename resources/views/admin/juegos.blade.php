<!-- extiende del layout master -->
@extends('admin.includes.admin-master')

<!-- Titulo de la pagina -->
@section('title', 'Administrador web')

<!-- Titulo de la sección -->
@section('title-page', 'Juegos')

<!-- Dropdown-menu -->
@section('navbar-juegos','active')


@section('seccion-principal','Juegos')
@section('seccion-principal-url','/admin/juegos')
@section('seccion-principal-icono','fa fa-gamepad fa-fw')

@section('content')
        @if(isset($edit))

          @include('admin.juegos.juegos-edit')

        @elseif(isset($crear))

          @include('admin.juegos.juegos-crear')

        @else

          @include('admin.juegos.juegos-lista')

        @endif
@endsection
