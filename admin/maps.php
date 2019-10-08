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
    <!-- Google Map area End-->
    <div class="google-map-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
   
                        <div id="map2">
                            <iframe src="https://www.google.com/maps/d/embed?mid=14go-2uM9f0I7ppfap5jMJdhsAhX84FOk" class="google-map-single sm-res-mg-t-30"></iframe>
                        </div>
             
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="google-map-single sm-res-mg-t-30">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="google-map-single mg-t-30">
                        <div id="map86"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="google-map-single mg-t-30">
                        <div id="map7"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map area End-->


<!-- Fin Insertar contenido -->

<?php
include "php/script.php"
?>
</body>
</html>