function insertarRuta(){

	var nombre=$("#nombre").val();
	var descripcion=$("#descripcion").val();
	var duracionL=$("#duracionL").val();
	var tiempoU=$("#tiempoU").val();
	var distanciaU=$("#distanciaU").val();
	var ubicacion=$("#ubicacion").val();
	var inputFileImage = document.getElementById("imagen");
    var imagen = inputFileImage.files[0];

    var route =getBaseDir()+"lugarTuristico";
    var token = $("#token").val();
    //alert(route);
    var dato= new FormData();
        dato.append('nombre',nombre);
        dato.append('descripcion',descripcion);
        dato.append('duracionL',duracionL);
        dato.append('tiempoU',tiempoU);
        dato.append('distanciaU',distanciaU);
        dato.append('ubicacion',ubicacion);
        dato.append('imagen',imagen);

        $.ajax({
				url: route,
				headers: {'X-CSRF-TOKEN': token},//Al X-CSRF-TOKEN se le envia la variable token
				type: 'POST',
				dataType: 'json',
				data: dato,
		        cache: false,
		        contentType: false,
		        processData: false,

				success:function(response){
					$("#msj-error").fadeOut();
					//alert('entro aqui');
					//limpiarCampos();
					$("#msj-su").html(response.lugar);
					$("#msj-success").fadeIn(2000);
					
				},//fin succes

				error:function(){
					$("#msj-error").fadeIn(2000);
					
					
				}//fin error
			});//fin ajax


}

function listarLugares(){
	var oTable = $('#tabla_lugares').dataTable();
   //Refrescar la tabla
    oTable.fnDestroy( 0 );

	var tablaDatos = $("#datos");
	var route =getBaseDir()+"listadoLugaresTuristicos";
	var routeEdit=getBaseDir()+"lugarTuristico/"

	$("#datos").empty();//Pregunta si la tabla esta vacia
	$.get(route, function(response){
		$(response).each(function(key,value){//Aqui se iteran todos los generos
			//Mediante apend se van agregando las filas
			tablaDatos.append(
				"<tr>"+
				"<td>"+value.id+"</td>"+
				"<td>"+value.nombre+"</td>"+
				"<td>"+value.ubicacion+"</td>"+
				"<td><a href="+routeEdit+value.id+"/edit"+"><img class='iq-boton-editar'/></a></td>"+
				"<td><img class='iq-boton-eliminar' OnClick='eliminarLugar("+value.id+");'/></td>"+
				"</tr>"
			);
		});
		$('#tabla_lugares').DataTable({

          "retrieve": false,
       	  "language": {
            "url": "admin/plugins/datatables/Spanish.json"
        }
        });
	});
}

function editarLugar(){

	var nombre=$("#nombre").val();
	var descripcion=$("#descripcion").val();
	var duracionL=$("#duracionL").val();
	var tiempoU=$("#tiempoU").val();
	var distanciaU=$("#distanciaU").val();
	var ubicacion=$("#ubicacion").val();
	var inputFileImage = document.getElementById("imagen");
    var imagen = inputFileImage.files[0];
    var id= $("#id").val();

    var route =getBaseDir()+"lugarTuristico/update";
    var token = $("#token").val();
    alert('entro aqui');
    //alert(route);
    var dato= new FormData();
        dato.append('nombre',nombre);
        dato.append('descripcion',descripcion);
        dato.append('duracionL',duracionL);
        dato.append('tiempoU',tiempoU);
        dato.append('distanciaU',distanciaU);
        dato.append('ubicacion',ubicacion);
        dato.append('imagen',imagen);
        dato.appaned('id',id);

        $.ajax({
				url: route,
				headers: {'X-CSRF-TOKEN': token},//Al X-CSRF-TOKEN se le envia la variable token
				type: 'POST',
				dataType: 'json',
				data: dato,
		        cache: false,
		        contentType: false,
		        processData: false,

				success:function(){

					window.location=getBaseDir()+"lugarTuristico";
					
				},//fin succes

				error:function(){
					$("#msj-error").fadeIn(2000);
					
					
				}//fin error
			});//fin ajax


}

function eliminarLugar(id){
 	
			
			var route = getBaseDir()+"lugarTuristico/"+id+"";
			var token = $("#token").val();
			$.ajax({
				url: route,
				headers: {'X-CSRF-TOKEN': token},
				type: 'DELETE',
				dataType: 'json',
				success: function(){
					
					$("#msj-success").fadeIn(2000);
					$("#msj-success").fadeOut(2000);
					listarLugares();
				}
			});//fin ajax
		
    
 }//fin Eliminar