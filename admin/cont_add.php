<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto R</title>
<?php
include "php/link.php";
?>   
<style>
     
      #mapa {
        height: 400px;  
        width: 100%; 
      }
      #selectBarrio{
          width: 200px;
      }
    </style>
</head>
<body>
<?php
include "componentes/topheader.php";
include "componentes/mobilemenu.php";
include "componentes/navbar.php"
?>
<!-- Insertat contenido -->
<div class="container">
<h1 class= "center">Agregar Contenedor</h1>
<div class="google-map-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
   
                        <div id="map2">
                                <div id="mapa"></div>
                        </div>
             
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <form action="">
                                <div>
                                    <label class="ts-label" for="barrio">Tipo de contenedor</label>
                                    <select tabindex="-98" id="selectBarrio"class="btn-group bootstrap-select" data-live-search="true">
                                            <option></option>
                                            <option></option>
                                    </select>
                                </div>
                                <br>
                                <div>
                                    <label class="ts-label" for="barrio">Barrio</label>                                 

                                    <select tabindex="-98" id="selectBarrio"class="btn-group bootstrap-select" data-live-search="true">
                                            <option></option>
                                            <option></option>
                                    </select>
                                </div> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>


</div>

<!-- Fin Insertar contenido -->
<!-- <script>


function initMap() {

navigator.geolocation.getCurrentPosition(fn_ok, fn_error);
function fn_error(){

}
function fn_ok(respuesta){ 
   var lat = respuesta.coords.latitude;
   var lon = respuesta.coords.longitude;
   var gLatLon = new google.maps.LatLng(lat, lon);

   console.log(gLatLon)
}

  var myCenter = /* gLatLon */{lat: -26.1852004, lng: -58.1753619};
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 16, center: myCenter});

/*   var marker = new google.maps.Marker({position: myCenter, map: map}); */
}

    </script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCySv0nSZn3vyrRm0pVH-nCikzaaX8sQS0&callback=initMap"></script>

<script type="text/javascript">
      function initMap() {
          var map;
          var bounds = new google.maps.LatLngBounds();
          var mapOptions = {
              mapTypeId: 'roadmap'
          };

          map = new google.maps.Map(document.getElementById('mapa'), {
              mapOptions
          });

          map.setTilt(50);

          // Crear múltiples marcadores desde la Base de Datos 
          var marcadores = [
              <?php include('php/marcadores.php'); ?>
          ];

          // Creamos la ventana de información para cada Marcador
          var ventanaInfo = [
              <?php include('php/info_marcadores.php'); ?>
          ];

          // Creamos la ventana de información con los marcadores 
          var mostrarMarcadores = new google.maps.InfoWindow(),
              marcadores, i;

          // Colocamos los marcadores en el Mapa de Google 
          for (i = 0; i < marcadores.length; i++) {
              var position = new google.maps.LatLng(marcadores[i][1], marcadores[i][2]);
              bounds.extend(position);
              marker = new google.maps.Marker({
                  position: position,
                  map: map,
                  title: marcadores[i][0]
              });

              // Colocamos la ventana de información a cada Marcador del Mapa de Google 
              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                  return function() {
                      mostrarMarcadores.setContent(ventanaInfo[i][0]);
                      mostrarMarcadores.open(map, marker);
                  }
              })(marker, i));

              // Centramos el Mapa de Google para que todos los marcadores se puedan ver 
              map.fitBounds(bounds);
          }

          // Aplicamos el evento 'bounds_changed' que detecta cambios en la ventana del Mapa de Google, también le configramos un zoom de 14 
          var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
              this.setZoom(14);
              google.maps.event.removeListener(boundsListener);
          });

      }

      // Lanzamos la función 'initMap' para que muestre el Mapa con Los Marcadores y toda la configuración realizada 
      google.maps.event.addDomListener(window, 'load', initMap);
    </script>  
 <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCySv0nSZn3vyrRm0pVH-nCikzaaX8sQS0&callback=initMap">
    </script>
<?php
include "php/script.php"
?>
</body>
</html>