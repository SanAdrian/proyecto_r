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
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
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
<h1 class= "center">Agregar rutas</h1>
<div class="google-map-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
   
                        <div id="map2">
                            <!-- <iframe src="https://www.google.com/maps/d/embed?mid=14go-2uM9f0I7ppfap5jMJdhsAhX84FOk" class="google-map-single sm-res-mg-t-30"></iframe> -->
                                <div id="map"></div>
                        </div>
             
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <form action="">



        <div class="nk-toggle-switch" data-ts-color="cyan">
            <label class="ts-label" for="ts5">Lunes</label>
            <input id="lunes" type="checkbox" hidden="hidden">
            <label class="ts-helper" for="lunes"></label>
            <br><br>
            <label class="ts-label" for="ts5">Martes</label>
            <input id="martes" type="checkbox" hidden="hidden">
            <label class="ts-helper" for="martes"></label>
            <br><br>
            <label class="ts-label" for="ts5">Miercoles</label>
            <input id="miercoles" type="checkbox" hidden="hidden">
            <label class="ts-helper" for="miercoles"></label>
            <br><br>
            <label class="ts-label" for="ts5">Jueves</label>
            <input id="jueves" type="checkbox" hidden="hidden">
            <label class="ts-helper" for="jueves"></label>
            <br><br>
            <label class="ts-label" for="ts5">Vierness</label>
            <input id="viernes" type="checkbox" hidden="hidden">
            <label class="ts-helper" for="viernes"></label>
            <br><br>
            
          </div>
          <br>
          <label class="ts-label" for="barrio">Barrio</label>
                <select tabindex="-98" id="selectBarrio"class="btn-group bootstrap-select" data-live-search="true">
                    <option></option>
                            <option></option>

                    </select></div>
                    
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

var divMap = document.getElementById(map);
navigator.geolocation.getCurrentPosition(fn_ok, fn_error);
function fn_error(){

}
function fn_ok(respuesta){
   var lat = respuesta.coords.latitude;
   var lon = respuesta.coords.longitude;

   var gLatLon = new google.maps.LatLng(lat, lon);
   var objConfig = {
       zoom: 17,
       center: gLatLon
   };
    
   gMap = new google.maps.Map(divMap, objConfig);
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