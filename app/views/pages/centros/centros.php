<?php

include_once URL_APP . '/views/custom/header.php';

include_once URL_APP . '/views/custom/navbar.php';

?>

<meta name="viewport" content="initial-scale=1.0,
        width=device-width" />
<script src="https://js.api.here.com/v3/3.1/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
<script src="https://js.api.here.com/v3/3.1/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCySv0nSZn3vyrRm0pVH-nCikzaaX8sQS0&callback=initMap"></script>
<div class="container mt-3">
    <div class="row">
        <!-- Columna perfil -->
        <!-- Info Usuario -->
        <?php include_once URL_APP . '/views/custom/sidebar.php' ?>

    </div>
    <!-- Columna principal -->
    <div class="col-md-9">
        <div class="container-notificaciones-usuario">
            <h4>CENTROS DE RECICLAJE</h4>
            <p></p>
            <hr>
            <!-- Mapa de Marcadores -->
            <div id="map" style="width:100%;height:400px;">
            </div>
            <hr>
            <div class="center">
                <!-- BOTON AGREGAR CCENTRO -->
                <button type="button" class="btn-green" data-toggle="modal" data-target="#myModal">Agregar Centro</button>
                <!--                 <form action="" method="POST" class="tipe-form form-inline my-2 my-lg-0">
                    <input type="text" name="buscar" class="form-style" placeholder="Buscar" />
                    <button class="btn-form" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form> -->
            </div>
            <!-- Tabla Contenedores -->
            <div class='table-responsive'>

                <div>
                    <!-- esta es a manera de prueba -->
                    <input id="buscar" type="text" placeholder="buscar" class="form-style">


                    <table id="filtrar" class='table'>
                        <thead class='thead-green'>
                            <tr>
                                <!-- <th scope='col'>IdCont</th> -->
                                <!-- <th scope='col'>Barrio</th> -->
                                <th scope='col'>Propietario</th>
                                <th scope='col'>Tipo</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($datos['allCentros'] as $centro) : ?>
                                <tr>
                                    <!-- <td scope='col'> <?php /* echo $contendores->idCont */ ?> </td> -->
                                    <!-- <td scope='col'> <?php /* echo $centro->barrio */ ?> </td> -->
                                    <td scope='col'> <?php echo $centro->nombreCompleto ?> </td>
                                    <td scope='col'> <?php echo $centro->tipoResiclador ?> </td>

                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>

                </div>

            </div> <!-- fin del div tabla -->
            <!-- Coso modal -->
            <div class="modal" id="myModal">
                <div class="container">
                    <div class="container-perfil">
                        <h2 class="text-center">Agregar Centro de Reciclaje</h2>
                        <h6 class="text-center">Antes de guardar complete todos los campos</h6>
                        <hr>
                        <div class="content-completar-perfil center">
                            <form action="<?php echo URL_PROJECT ?>/container/addContainer" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_user" value="<?php echo $_SESSION['logueado'] ?>">
                                <div class="form-group">
                                    <!-- Boton Nuevo Contenedor -->
                                    <div class="center">
                                        <input type="button" value="Nuevo Contenedor" onclick="newContainer()" class="btn-green" id="btnCont">
                                    </div><br>
                                    <!-- Select tipo barrio -->
                                    <select name="selectBarrio" class="form-control" id="selectB">
                                        <option value="0">Selecione un barrio</option>
                                        <?php foreach ($datos['barrios'] as $barrios) : ?>
                                            <option value="<?php echo $barrios->idBarrio ?>"><?php echo $barrios->barrio ?></option>
                                        <?php endforeach ?>
                                    </select><br>
                                    <!-- Dirección Centro -->
                                   <!--  <input type="text" name="addressCont" class="form-control" placeholder="Dirección" required><br> -->
                                    <!-- Select tipo contenedor -->
                                    <select name="tipoCont" class="form-control" onchange="changeIconContainer(this.value)" id="selectTC">
                                        <option value="0">Tipo de contenedor</option>
                                        <?php foreach ($datos['tiposResiduo'] as $tiposResiduo) : ?>
                                            <option value="<?php echo $tiposResiduo->IdTipoResiduos ?>"><?php echo $tiposResiduo->nombreTipoR ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>


                                <!-- Input Ocultos para guardar coordenadas -->
                                <input type="hidden" name="containerLat" placeholder="Latitud" id="containerLat" class="form-control" required>
                                <input type="hidden" name="containerLng" placeholder="Longitud" id="containerLng" class="form-control" required>
                                <div id="mapa" style="width:100%;height:300px;"></div><br>
                                <!-- Boton Guardar Centro -->
                                <button class="btn-green btn-block">Guardar</button>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
                    </div>
                </div>
            </div>

            <!-- fin coso modal -->
        </div>
    </div>
</div>
<script type="text/javascript">
    startMap();
</script>

<script type="text/javascript">
    function initMap() {
        var mapCont;
        var bounds = new google.maps.LatLngBounds();
        var mapOptions = {
            mapTypeId: 'roadmap'
        };

        mapCont = new google.maps.Map(document.getElementById('map'), {
            mapOptions
        });

        mapCont.setTilt(50);

        // Creamos la ventana de información con los marcadores 
        /* var mostrarMarcadores = new google.maps.InfoWindow(),
            marcadores, i; */
        <?php foreach ($datos['marcadores'] as $marcadores) : ?>
            var position = new google.maps.LatLng(<?php echo $marcadores->latCoords ?>, <?php echo $marcadores->lngCoords ?>);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: mapCont,
                title: <?php echo $marcadores->IdCentroReciclaje ?>
            });
            console.log(position)
            mapCont.fitBounds(bounds);



            var iconBase = 'http://localhost:8080/proyecto_r/public/img/icons/recycle/';
            var value = <?php echo $marcadores->typeRecycler ?>;

            if (value == 1) {
                marker.setIcon(iconBase + 'paper.png')
            } else
            if (value == 2) {
                marker.setIcon(iconBase + 'plastic.png')
            } else
            if (value == 3) {
                marker.setIcon(iconBase + 'metal.png')
            } else
            if (value == 4) {
                marker.setIcon(iconBase + 'glass.png')
            } else;
            if (value == 5) {
                marker.setIcon(iconBase + 'white.png')
            }
            console.log('tipo centro: ' + value)

            google.maps.event.addListener(marker, 'click', function() {
                mapCont.setZoom(17);
                mapCont.panTo(position);
                console.log()
            })

        <?php endforeach ?>



    }


    // Lanzamos la función 'initMap' para que muestre el Mapa con Los Marcadores y toda la configuración realizada 
    google.maps.event.addDomListener(window, 'load', initMap);
</script>
<?php

include_once URL_APP . '/views/custom/footer.php';

?>