<?php

include_once URL_APP . '/views/custom/header.php';

include_once URL_APP . '/views/custom/navbar.php';

?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCySv0nSZn3vyrRm0pVH-nCikzaaX8sQS0"></script>
<div class="container mt-3">
    <div class="row">
        <!-- Columna perfil -->
        <!-- Info Usuario -->
        <?php include_once URL_APP . '/views/custom/sidebar.php' ?>

    </div>
    <!-- Columna principal -->
    <div class="col-md-9">


        <!-- nuevo contenededor -->
        <div class="container">
            <div class="container-perfil">
                <h2 class="text-center">Agregar Contenedor</h2>
                <h6 class="text-center">Antes de guardar complete todos los campos</h6>
                <hr>
                <div class="content-completar-perfil center">
                    <form action="<?php echo URL_PROJECT ?>/news/addNew" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_user" value="<?php echo $_SESSION['logueado'] ?>">
                        <div class="form-group">
                            <!-- Boton Nuevo Contenedor -->
                            <div class="center">
                                <input type="button" value="Nuevo Contenedor" onclick="newContainer()" class="btn-green" id="btnCont">
                            </div><br>
                            <!-- Select tipo barrio -->
                            <select name="barrio" class="form-control" id="selectB" >
                                <option value="0">Selecione un barrio</option>
                                <?php foreach ($datos['barrios'] as $barrios) : ?>
                                    <option value="<?php echo $barrios->IdBarrio ?>"><?php echo $barrios->barrio ?></option>
                                    <?php endforeach ?>
                                </select><br>
                                <!-- Dirección Contendor -->
                                <input type="text" name="addressCont" class="form-control" placeholder="Dirección" required><br>
                            <!-- Select tipo contenedor -->
                            <select name="tipoCentro" class="form-control" onchange="changeIconContainer(this.value)" id="selectTC">
                                <option value="0">Tipo de contenedor</option>
                                <?php foreach ($datos['tiposResiduo'] as $tiposResiduo) : ?>
                                    <option value="<?php echo $tiposResiduo->IdTipoResiduos ?>"><?php echo $tiposResiduo->nombreTipoR ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <!-- Input Ocultos para guardar coordenadas -->
                        <input type="text" name="containerLat" placeholder="Latitud" id="containerLat" class="form-control">
                        <input type="text" name="containerLng" placeholder="Longitud" id="containerLng" class="form-control">
                        <div id="mapa" style="width:100%;height:300px;"></div><br>
                        <button class="btn-green btn-block">Guardar</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>



<?php
/* $lat="54.1456123";
$long = "10.413456";

$url = "http://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyCySv0nSZn3vyrRm0pVH-nCikzaaX8sQS0&latlng=$lat,$long&sensor=false";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_ENCODING, "");
$curlData = curl_exec($curl);
curl_close($curl);

$address = json_decode($curlData);
print_r($address); */
?>


<script type="text/javascript">
    startMap();
</script>


<?php

include_once URL_APP . '/views/custom/footer.php';

?>