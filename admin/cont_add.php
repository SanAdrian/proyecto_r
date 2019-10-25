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
     
      #map {
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
                                <div id="map"></div>
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
<script>


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

    </script>
 <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCySv0nSZn3vyrRm0pVH-nCikzaaX8sQS0&callback=initMap">
    </script>
<?php
include "php/script.php"
?>
</body>
</html>