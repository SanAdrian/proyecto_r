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
        <div class="container-notificaciones-usuario">
            <h4>CONTENDORES</h4>
            <p>INSERTAR TABLA DE CONTENEDORES <span class="badge badge-pill badge-primary"><?php echo $datos['cantidadUsuarios'] ?></span></p>
            <hr>
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
                                    <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" required>
                                    <select name="tipoUser" class="form-control">
                                        <option value="0">Tipo de Usuario</option>
                                        <option value="1">Común</option>
                                        <option value="2">Reciclador</option>
                                    </select>
                                    <select name="tipoCentro" class="form-control">
                                        <option value="0">Tipo de reciclador</option>
                                        <option value="1">Papel/Carton</option>
                                        <option value="2">Plasticos</option>
                                        <option value="3">Metales</option>
                                        <option value="4">Vidrios</option>
                                        <option value="5">Orgánicos</option>
                                    </select>
                                    <br>
                                    <div class="center">
                                        <input type="button" value="Mi Ubicación" onclick="getMyPosition()" class="btn-green">
                                        <input type="button" value="   Mi Centro   " onclick="getMyCenterPosition()" class="btn-green">
                                    </div>
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


        </div>
    </div>
</div>





<script type="text/javascript">
    startMap();
</script>


<?php

include_once URL_APP . '/views/custom/footer.php';

?>