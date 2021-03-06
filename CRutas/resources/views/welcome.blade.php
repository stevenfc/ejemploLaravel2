@extends('vistas_cliente.layoutCliente')

@section('contenido')
<div class="main_bg"><!-- start main -->
<div class="container">
    <div class="main_grid1">
        <h3 style="color:#E8645A;" class="style pull-left">Buscar Rutas Turísticas de Costa Rica</h3>
        <ol class="breadcrumb pull-right">
          
        </ol>
        <div class="clearfix"></div>
    </div>
</div>
</div>
<div id="fwslider"><!-- start slider -->
        <div class="slider_container">
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                <img src="cliente/images/cr1.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">Costa Rica</h4>
                        <p class="description">Parque Nacional Volcán Arenal</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <img src="cliente/images/cr2.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">Costa Rica</h4>
                        <p class="description">Playa Tamarindo, Guanacaste</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <img src="cliente/images/cr3.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">Costa Rica</h4>
                        <p class="description">Reserva Biológica Monteverde</p>
                    </div>
                </div>
            </div>
             <div class="slide">
                <img src="cliente/images/cr4.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">Costa Rica</h4>
                        <p class="description">Parque Nacional Marino Ballena</p>
                    </div>
                </div>
            </div>
             <div class="slide">
                <img src="cliente/images/cr5.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">Costa Rica</h4>
                        <p class="description">Río Celeste</p>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div><!--/slider -->
<!--formulario-->





<!--formulario-->



<script>
$('#inicio').addClass('activate');
</script>
@endsection

@section('contenido2')
<div class="container">
    <div class="contact"> 
   <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">-->
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <!--  <div class="contact-form">-->
                <form method="POST" action="{!!URL::to('/buscarRutas')!!}"> 

                    <label for="selectUbicacion" class="control-label" style="font-size:large;">Ubicación</label>
                    <select class="form-control" name="selectUbicacion">
                        <option value="2">Liberia, Guanacaste</option>
                        <option value="3">Alajuela, Alajuela</option>
                        <option value="1">Cartago, Cartago</option>
                        <option value="4">Limón, Limón</option>
                        <option value="5">Jacó, Puntarenas</option>
                    </select>
                    <p class="help-block" style="font-size:small;">Seleccione la ubicación donde desea iniciar la ruta.</p>
                    <br>
                    <label for="selectTiempo" class="control-label" style="font-size:large;">Tiempo de Ruta</label>
                    <select class="form-control" name="selectTiempo">
                        <option value="1">De 1 a 3 Horas</option>
                        <option value="2">De 3 a 6 Horas</option>
                        <option value="3">De 6 a 9 Horas</option>
                        <option value="4">De 9 a 12 Horas</option>
                    </select>
                    <p class="help-block" style="font-size:small;">Seleccione el rango de tiempo que desea para la ruta.</p>
                    <br>
                    <label for="selectDistancia" class="control-label" style="font-size:large;">Distancia del punto de partida</label>
                    <select class="form-control" name="selectDistancia">
                        <option value="1">De 1 Km a 20 Km</option>
                        <option value="2">De 20 Km a 40 Km</option>
                        <option value="3">De 40 Km a 60 Km</option>
                        <option value="4">De 60 Km a 80 Km</option>
                    </select>
                    <p class="help-block" style="font-size:small;">Seleccione el rango de distancia que desea para la ruta en base a la ubicación de partida.</p>
                    <br>
                    <label for="selectPrecio" class="control-label" style="font-size:large;">Precio</label>
                    <select class="form-control" name="selectPrecio">
                        <option value="1">De 0$ a 50$</option>
                        <option value="2">De 50$ a 100$</option>
                        <option value="3">De 100$ o más</option>
                    </select>
                    <p class="help-block" style="font-size:small;">Seleccione el rango de precio que desea para los lugares turísticos</p>
                    <br>
                    <label for="selectTipo" class="control-label" style="font-size:large;">Tipo de lugar turístico</label>
                    <select class="form-control" name="selectTipo">
                        <option value="1">Aventura</option>
                        <option value="2">Playa</option>
                        <option value="3">Cultural</option>
                        <option value="4">Ecológico</option>
                    </select>
                    <p class="help-block" style="font-size:small;">Seleccione el tipo de lugar turístico de su preferencia.</p>
                    
                    <div class="col-md-12"></div>
                   
                        <span><input style="background-color: #62A29E"  class="btn btn-primary"  type="submit" value="Buscar"></span>
                        <br><br>
                         @if(Session::has('error'))
               <center> <strong style="color:red; font-size:16px;">{{Session::get('error')}}</strong></center>

                @endif
                 </form>
             
          <!--  </div>-->
        </div>
    </div>
</div>

@endsection

@section('video')
<div style="float: left;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<video  controls>
 
  <source src="cliente/videos/video1.mp4" type="video/mp4">
  Tu navegador no implementa el elemento <code>video</code>.
 
</video>
</div>
<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<video  controls>
 
 
   <source src="cliente/videos/video2.mp4" type="video/mp4">
  Tu navegador no implementa el elemento <code>video</code>.
</video>

</div>
<br>
@endsection
@section('scripts')
{!!Html::script('cliente/js/Ruta/ruta.js')!!}
@endsection