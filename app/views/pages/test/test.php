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

        <div class="container">
            <div class="container-perfil">
                <h2 class="text-center">Agregar Noticia</h2>
                <h6 class="text-center">Antes de continuar todos los campos</h6>
                <hr>
                <div class="content-completar-perfil center">
                    <form action="<?php echo URL_PROJECT ?>/news/addNew" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_user" value="<?php echo $_SESSION['logueado'] ?>">
                        <div class="form-group">
                            <input type="text" name="tituloNoti" class="form-control" placeholder="Titulo" required>
                            <!-- Boton Nuevo Contenedor -->
                            <div class="center">
                                <input type="button" value="Nuevo Contenedor" onclick="newContainer()" class="btn-green" id="btnCont">
                            </div>
                            <!-- Select tipo contenedor -->
                            <select name="tipoCentro" class="form-control" onchange="changeIconRecycler(this.value)" id="selectTC">
                                <option value="0">Tipo de contenedor</option>
                                <?php foreach ($datos['tiposReciclador'] as $tiposReciclador) : ?>
                                    <option value="<?php echo $tiposReciclador->idTipoReciclador ?>"><?php echo $tiposReciclador->tipoResiclador ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <!-- Input Ocultos para guardar coordenadas -->
                        <input type="text" name="myLat" placeholder="Latitud" id="containerLat" class="form-control">
                        <input type="text" name="myLng" placeholder="Longitud" id="containerLng" class="form-control">
                        <div id="mapa" style="width:100%;height:300px;"></div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="imagen" id="imagen" required>
                                <label class="custom-file-label" for="imagen">Seleccionar una foto</label>
                            </div>
                        </div>
                        <button class="btn-green btn-block">Guardar</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>






<script type="text/javascript">
    startMap();
</script>


<?php

include_once URL_APP . '/views/custom/footer.php';

?>