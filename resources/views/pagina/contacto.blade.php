<!-- extiende del layout master -->
@extends('pagina.includes.master')

@section('content')
<div class="contact">

<div class="container">
    <h2>Contacto</h2>
<div class="contact-form">
    @if(session()->has('msj'))
        <div class="alert alert-success dismissible fade in custom-alert" role="alert">
          <a style="cursor:pointer;" class="close" data-dismiss="alert">&times;</a>{{ session('msj') }}
        </div>
      @endif
    <div class="col-md-8 contact-grid">
        {!! Form::open(['url' => 'correo-contacto', 'method' => 'POST']) !!}	
            <input require type="text" name="nombre" value="Nombre" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Nombre';}">
        
            <input require type="text" name="correo" value="Correo" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Correo';}">
            <input require type="text" name="asunto" value="Asunto" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Asunto';}">
            
            <textarea require cols="77" name="mensaje" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Mensaje';}">Mensaje</textarea>
            <div class="send">
                <input type="submit" value="Enviar" >
            </div>
        {!! Form::close() !!}
    </div>
    <div class="col-md-4 contact-in">

            <div class="address-more">
            <h4>Dirección</h4>
                <p>{{$info->direccion}}</p>
            </div>

        
    </div>
    <div class="clearfix"> </div>
</div>
</div>
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771"></iframe>
</div>
</div>
<script>
    $("[data-dismiss='alert']").alert();
    window.setTimeout(function() { $("[data-dismiss='alert']").alert('close'); }, 2000);
</script>
@endsection