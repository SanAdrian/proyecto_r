<?php

include_once URL_APP . '/views/custom/header.php';

?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCySv0nSZn3vyrRm0pVH-nCikzaaX8sQS0"></script>

<!-- Formulario Completar Perfil -->
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
                        <!-- Input Nombre Completo -->
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" required><br>
                        <!--  Select Tipo de Usuario -->
                        <select name="tipoUser" class="form-control" onchange="selectTypeUser(this.value)">
                            <option value="0">Tipo de Usuario</option>
                            <?php foreach ($datos['tiposUser'] as $tipoUser) : ?>
                                <option value="<?php echo $tipoUser->idPerfil ?>"><?php echo $tipoUser->nombrePrivilegio ?></option>
                            <?php endforeach ?>
                        </select>
                        <br>
                        <div class="center">
                            <input type="button" value="Mi Ubicación" onclick="markerMyPosition()" class="btn-green btn-separate" id="btnMiUbicacion"> <!-- Boton Mi Ubicación -->
                            <input type="button" value="   Mi Centro   " onclick="markerMyCenterPosition()" class="btn-gray btn-separate" id="btnMiCentro" disabled="true"> <!-- Boton Mi Centro -->
                        </div>
                        <!-- Select Tipo Reciclador -->
                        <select name="tipoCentro" class="form-control" onchange="changeIconRecycler(this.value)" id="selectTR" disabled="true">
                            <option value="0">Tipo de reciclador</option>
                            <?php foreach ($datos['tiposReciclador'] as $tiposReciclador) : ?>
                                <option value="<?php echo $tiposReciclador->idTipoReciclador ?>"><?php echo $tiposReciclador->tipoResiclador ?></option>
                            <?php endforeach ?>
                        </select>
                        <!-- Input Ocultos para guardar coordenadas -->
                        <input type="hidden" name="myLat" placeholder="Latitud" id="myLat" class="form-control">
                        <input type="hidden" name="myLng" placeholder="Longitud" id="myLng" class="form-control">
                        <input type="hidden" name="myLatCenter" placeholder="Latitud" id="myLatCenter" class="form-control">
                        <input type="hidden" name="myLngCenter" placeholder="Longitud" id="myLngCenter" class="form-control">
                    </div>
                    <hr>
                    <!-- Mapa de Marcadores -->
                    <div id="mapa" style="width:100%;height:400px;">
                    </div>
                    <hr>
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
    startMap();
</script>

<?php

include_once URL_APP . '/views/custom/footer.php';

?>