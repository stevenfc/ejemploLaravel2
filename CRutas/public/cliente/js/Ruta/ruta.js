function buscarRutas(){
	var route=getBaseDir()+"buscarRutas";
	var token = $("#token").val();
     var dato= new FormData();
        dato.append('ubicacion', $("#selectUbicacion").val());
        dato.append('tiempo', $("#selectTiempo").val());
        dato.append('distancia', $("#selectDistancia").val());
        dato.append('precio', $("#selectPrecio").val());
        dato.append('tipo', $("#selectTipo").val());
      
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
       
					//alert(response.mensaje);
					
				},//fin succes

			error:function(){
				//alert("error");
				}//fin error
			});//fin ajax	
}


function iniciarMapa(){
 var latitudPuntoPartida = Number($("#latitudUbicacion").val());
 var longitudPuntoPartida = Number($("#longitudUbicacion").val());

 var form = document.getElementById("myForm");
 inputs = form.getElementsByTagName("input");
 latitudes = [];
 longitudes=[];

 for(var i=0, len=inputs.length; i<len; i++){
  if(inputs[i].type === "hidden" && inputs[i].name === "latitudes[]"){
    if(inputs[i].value!=0){
       latitudes.push(inputs[i].value);
     }
   
  
  }else if (inputs[i].type === "hidden" && inputs[i].name === "longitudes[]"){
    if(inputs[i].value!=0){
       longitudes.push(inputs[i].value);
    }
  
  
  }
}
 var puntoPartida = {lat:  latitudPuntoPartida, lng: longitudPuntoPartida};
  var map = new google.maps.Map(document.getElementById('mapa'), {
  center: puntoPartida,
  scrollwheel: false,
  zoom: 7
});

if(latitudes.length!=0){
  var posicionFinal= latitudes.length-1;
var latitudPuntoFinal= Number(latitudes[posicionFinal]);
var longitudPuntoFinal= Number(longitudes[posicionFinal]);

  var puntoFinal = {lat: latitudPuntoFinal, lng: longitudPuntoFinal};


  var directionsDisplay = new google.maps.DirectionsRenderer({
    map: map
  });
  var waypts = [];
  for(var j=0; j<=latitudes.length-1; j++){
     lat = Number(latitudes[j]);
      long = Number(longitudes[j]);
     waypts.push({
    location:  {lat: lat, lng: long},
    stopover: true
  });
  }
  // Set destination, origin and travel mode.
  var request = {
    destination:  puntoFinal,
    origin: puntoPartida,
    waypoints: waypts,
    optimizeWaypoints: true,
    travelMode: google.maps.TravelMode.DRIVING
  };
  // Pass the directions request to the directions service.
  var directionsService = new google.maps.DirectionsService();
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      // Display the route on the map.
      directionsDisplay.setDirections(response);
    }
  });

}

}



//MARKER

/* var contentString = '<h1>Hola</h1>'

  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });

  var marker = new google.maps.Marker({
    position: prueba,
    map: map,
    title: 'Prueba'
  });
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });*/

//MARKER

/* waypts.push({
    location: lugar2,
    stopover: true
  });*/