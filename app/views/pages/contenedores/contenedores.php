<?php

include_once URL_APP . '/views/custom/header.php';

include_once URL_APP . '/views/custom/navbar.php';

?>

<div class="container mt-3">
    <div class="row">
        <!-- Columna perfil -->
        <!-- Info Usuario -->
        <?php include_once URL_APP . '/views/custom/sidebar.php' ?>

    </div>
    <!-- Columna principal -->
    <div class="col-md-9">
        <div class="container-notificaciones-usuario">
            <h4>CONTENDORES</h4>
            <p>INSERTAR TABLA DE CONTENEDORES <span class="badge badge-pill badge-primary"><?php echo $datos['cantidadUsuarios'] ?></span></p>
            <hr>
            <!-- Mapa de Marcadores -->
            <div id="map" style="width:100%;height:400px;">
            </div>
            <hr>
            <div class="center">
                <button class="btn-green">Agregar</button>
                <form action="" method="POST" class="tipe-form form-inline my-2 my-lg-0">
                            <input type="text" name="buscar" class="form-style" placeholder="Buscar" />
                            <button class="btn-form" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
            </div>
            <!-- Tabla Contenedores -->
            <div class='table-responsive'>

                <table class='table'>
                    <thead class='thead-green'>
                        <tr>
                            <th scope='col'>Barrio</th>
                            <th scope='col'>Dirección</th>
                            <th scope='col'>Tipo</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($datos['allContenedores'] as $contendores) : ?>
                            <tr>
                                <td scope='col'> <?php echo $contendores->barrio ?> </td>
                                <td scope='col'> <?php echo $contendores->direccionCont ?> </td>
                                <td scope='col'> <?php echo $contendores->tipoCont ?> </td>

                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function initMap() {
        var map;
        var bounds = new google.maps.LatLngBounds();
        var mapOptions = {
            mapTypeId: 'roadmap'
        };

        map = new google.maps.Map(document.getElementById('map'), {
            mapOptions
        });

        map.setTilt(50);

        /*         // Crear múltiples marcadores desde la Base de Datos 
                var marcadores = [
                    <?php /* include('php/marcadores.php'); */ ?>
                ];

                // Creamos la ventana de información para cada Marcador
                var ventanaInfo = [
                    <?php /* include('php/info_marcadores.php'); */ ?>
                ]; */

        // Creamos la ventana de información con los marcadores 
        var mostrarMarcadores = new google.maps.InfoWindow(),
            marcadores, i;
        <?php foreach ($datos['marcadores'] as $marcadores) : ?>
            var position = new google.maps.LatLng(<?php echo $marcadores->latCont ?>, <?php echo $marcadores->lngCont ?>);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                title: <?php echo $marcadores->idCont ?>
            });

            map.fitBounds(bounds);
        <?php endforeach ?>

        /*         // Colocamos los marcadores en el Mapa de Google 
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
                }); */

    }

    // Lanzamos la función 'initMap' para que muestre el Mapa con Los Marcadores y toda la configuración realizada 
    google.maps.event.addDomListener(window, 'load', initMap);
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCySv0nSZn3vyrRm0pVH-nCikzaaX8sQS0&callback=initMap"></script>
<?php

include_once URL_APP . '/views/custom/footer.php';

?>