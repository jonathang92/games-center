<!-- extiende del layout master -->
@extends('pagina.includes.master')

@section('content')
<div class="container">
<div class="games">
    <h2> Nosotros</h2>
    <div class="wrap">	
        <div class="main">
            <p>{!!$info->info_nosotros!!}</p>
            </div>
        </div>
    </div>
</div>
@endsection