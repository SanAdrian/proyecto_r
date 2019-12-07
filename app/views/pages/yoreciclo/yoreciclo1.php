<?php

include_once URL_APP . '/views/custom/header.php';

include_once URL_APP . '/views/custom/navbar.php';



?>

<div class="completarPerfil">
    <div class="container">
        <div class="container-perfil">
            <h2 class="text-center">Completa tu perfil</h2>
            <h6 class="text-center">Antes de continuar deberas completar tu perfil</h6>
            <hr>
            <div class="content-completar-perfil center">
                <form action="<?php echo URL_PROJECT ?>/home/insertarRegistrosPerfil" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_user" value="<?php echo $_SESSION['logueado'] ?>">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" required><br>
                        <input type="text" name="typeUser" class="form-control" placeholder="Tipo de usuario" required><br>
                        <input type="text" name="ubicación" class="form-control" placeholder="Ubicación" required>
                    </div>
                    <div id="map" style="margin: auto; width:70%;height:300px;"></div><br>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="imagen" id="imagen" required>
                            <label class="custom-file-label" for="imagen">Seleccionar una foto</label>
                        </div>
                    </div>
                    <button class="btn-green btn-block">Registrar datos</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center:google.maps.LatLng(-26.177798, -58.179822),
          zoom: 8, 
        }
    }
    /* google.maps.event.addDomListener(window, 'load', initMap); */
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCySv0nSZn3vyrRm0pVH-nCikzaaX8sQS0&callback=initMap"></script>


<?php

include_once URL_APP . '/views/custom/footer.php';
