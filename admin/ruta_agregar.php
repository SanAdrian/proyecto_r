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
                            <iframe src="https://www.google.com/maps/d/embed?mid=14go-2uM9f0I7ppfap5jMJdhsAhX84FOk" class="google-map-single sm-res-mg-t-30"></iframe>
                        </div>
             
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <form action="">

<a href="https://www.google.com.ar/maps/@-26.1868501,-58.1841015,14z/data=!4m2!10m1!1e4" target="_blank" class="btn btn-primary notika-btn-primary waves-effect">Mapa</a><br><br>

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
         <!--    <label class="ts-label" for="barrio">Barrio</label>
          </div> -->
<!--                 <div class="bootstrap-select fm-cmp-mg">
                <div class="btn-group bootstrap-select"><button title="Drama" class="btn dropdown-toggle btn-default" role="button" aria-expanded="false" type="button" data-toggle="dropdown">
                    <span class="filter-option pull-left">Drama</span>&nbsp;
                    <span class="bs-caret"><span class="caret"></span></span>
                    </button>
                    <div class="dropdown-menu open" role="combobox" style="overflow: hidden; min-height: 176px; max-height: 357.75px;">
                    <div class="bs-searchbox"><input class="form-control" role="textbox" aria-label="Search" type="text" autocomplete="off">
                    </div>
                    <ul class="dropdown-menu inner" role="listbox" aria-expanded="false" style="overflow-y: auto; min-height: 122px; max-height: 303.75px;">
                    <li class="selected active" data-original-index="0"><a tabindex="0" role="option" aria-disabled="false" aria-selected="true" style="" data-tokens="null"><span class="text">Drama</span>
                    <span class="notika-icon notika-checked check-mark"></span></a></li>
                    <li data-original-index="1"><a tabindex="0" role="option" aria-disabled="false" aria-selected="false" style="" data-tokens="null">
                    <span class="text">Cariska</span><span class="notika-icon notika-checked check-mark"></span></a></li>
                    <li data-original-index="2"><a tabindex="0" role="option" aria-disabled="false" aria-selected="false" style="" data-tokens="null">
                    <span class="text">Cheriska</span><span class="notika-icon notika-checked check-mark"></span></a></li>
                    <li data-original-index="3"><a tabindex="0" role="option" aria-disabled="false" aria-selected="false" style="" data-tokens="null"><span class="text">Malias</span>
                    <span class="notika-icon notika-checked check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" role="option" aria-disabled="false" aria-selected="false" style="" data-tokens="null">
                    <span class="text">Kamines</span><span class="notika-icon notika-checked check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" role="option" aria-disabled="false" aria-selected="false" style="" data-tokens="null">
                    <span class="text">Austranas</span><span class="notika-icon notika-checked check-mark"></span></a></li></ul></div> -->
                <!-- <select tabindex="-98" class="btn-group bootstrap-select" data-live-search="true">
                    <option></option>
                            <option>Cariska</option>
                            <option>Cheriska</option>
                            <option>Malias</option>
                            <option>Kamines</option>
                            <option>Austranas</option>
                    </select></div> -->
                    
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

<?php
include "php/script.php"
?>
</body>
</html>