<!-- extiende del layout master -->
@extends('pagina.includes.master')
@section('content')

<!--banner-->
@include('pagina.includes.banner')
<div class="content">

<!---->
<div class="col-mn">
    <div class="container">
            <div class="col-mn2">
                <h3>{{$info->titulo_principal}}</h3>
                <p>{!!$info->info_principal!!}</p>
                <!-- <a class=" more-in" href="single.html">Read More</a> -->
        </div>
    </div>
</div>
<!---->
@if(isset($juegos))
<div class="container">
  <div class="content-top">
    <h2 class="new">Novedades</h2>
    <div class="wrap">
      <div class="main">
        <ul id="og-grid" class="og-grid">
          @foreach($juegos->sortBy('created_at')->slice(0, 4) as $juego)
          <li>
            <a href="#" data-largesrc="images/juegos/{{$juego->urlImg}}" data-title="{{$juego->titulo}}" data-description="{!!$juego->info!!}">
              <img class="img-responsive" src="images/juegos/{{$juego->urlImg}}" alt="img01"/>
            </a>
          </li>
          @endforeach
          <div class="clearfix"></div>
        </ul>
      </div>
    </div>
  </div>
  <script src="/js/grid.js"></script>
  <script>
    $(function() {
      Grid.init();
    });
  </script>
</div>
@endif
</div>
<!---->
@endsection