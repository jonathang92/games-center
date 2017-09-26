<!-- extiende del layout master -->
@extends('pagina.includes.master')

@section('content')
<div class="container">
<div class="games">
    <h2> Juegos</h2>
    <div class="wrap">	
        <div class="main">
        @if( count($juegos) == 0 )
          <h1 class="no-hay">No Hay Juegos Disponibles :(</h1>
          @else
            <ul id="og-grid" class="og-grid">
                @foreach($juegos as $juego)
                <li>
                    <a href="#" data-largesrc="images/juegos/{{$juego->urlImg}}" data-title="{{$juego->titulo}}" data-description="{!!$juego->info!!}">
                        <img class="img-responsive" src="images/juegos/{{$juego->urlImg}}" alt="img01"/>
                    </a>
                </li>
                @endforeach
                <div class="clearfix"> </div>
                </ul>
        @endif
            </div>
        </div>
    </div>
    <script src="js/grid.js"></script>
		<script>
			$(function() {
				Grid.init();
			});
		</script>
</div>
@endsection