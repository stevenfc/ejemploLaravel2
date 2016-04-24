@extends('layoutAdmin.baseAdmin')
@section('main')
		<center>
			 <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Insertar Ruta Turística</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" id="insertR" name="insertR">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="nombre">Nombre</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                      <label for="descripcion">Descripción</label>
                      <textarea id="descripcion" name="descripcion"  class="form-control" placeholder="Descripción"></textarea>
                    </div>
                     <div class="form-group">
                      <label for="duracionL">Duración en el lugar</label>
                      <input type="text" class="form-control" id="duracionL" name="duracionL" placeholder="Duración en el lugar">
                    </div>
                    <div class="form-group">
                      <label for="tiempoU">Tiempo de llegada desde la ubicación</label>
                      <input type="text" class="form-control" id="tiempoU" name="tiempoU" placeholder="Tiempo de llegada desde la ubicación">
                    </div>

                    <div class="form-group">
                      <label for="distanciaU">Distancia desde la ubicación</label>
                      <input type="text" class="form-control" id="distanciaU" name="distanciaU" placeholder="Distancia desde la ubicación">
                    </div>

                      <div class="form-group">
                      <label for="ubicacion">Ubicación</label>
                     	<select id="selectError" data-rel="chosen" name="ubicación">
                             @foreach ($ubicaciones as $ubicacion)
                             
                            <option value="{{ $ubicacion->id }}">{{ $ubicacion->nombre }}</option>
                           
                             @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                      <label for="imagen">Seleccionar una imagen</label>
                      <input required type="file" id="imagen" name="imagen">
                      
                    </div>
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Insertar</button>
                  </div>
                </form>
              </div><!-- /.box -->
  </div>

</div>
</center>
@endsection
 @section('scripts')
 {!!Html::script('admin/js/validarRuta.js')!!}
 @endsection
