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
            <h4>RUTAS</h4>
            <p>INSERTAR TABLA DE RUTAS
                <!--  <span class="badge badge-pill badge-primary"><?php echo $datos['cantidadUsuarios'] ?></span></p> -->
                <hr>
                <!-- Mapa de Marcadores -->
                <div class="container">
                    <div class="container-perfil">
                        <h2 class="text-center">Agregar Ruta</h2>
                        <h6 class="text-center">Antes de guardar complete todos los campos</h6>
                        <hr>
                        <div class="content-completar-perfil center">
                            <form action="<?php echo URL_PROJECT ?>/container/addContainer" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_user" value="<?php echo $_SESSION['logueado'] ?>">
                                <div class="form-group">
                                    
                                    <!-- Select tipo barrio -->
                                    <select name="selectBarrio" class="form-control" id="selectB">
                                        <option value="0">Selecione un barrio</option>
                                        <?php foreach ($datos['barrios'] as $barrios) : ?>
                                            <option value="<?php echo $barrios->idBarrio ?>"><?php echo $barrios->barrio ?></option>
                                        <?php endforeach ?>
                                    </select><br>
                                    <!-- Select día -->
                                    <select name="tipoCont" class="form-control" onchange="" id="selectTC">
                                        <option value="0">Seleccione día</option>
                                        <?php foreach ($datos['dias'] as $dia) : ?>
                                            <option value="<?php echo $dia->idDia ?>"><?php echo $dia->dia?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                    <!-- Select día -->
                                    <select name="tipoCont" class="form-control" onchange="" id="selectTC">
                                        <option value="0">Seleccione el horario</option>
                                        <?php foreach ($datos['horarios'] as $horario) : ?>
                                            <option value="<?php echo $horario->idHorario ?>"><?php echo $horario->horario?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <!-- Input Ocultos para guardar coordenadas -->
                                <input type="hidden" name="startLat" placeholder="Latitud" id="startLat" class="form-control" required>
                                <input type="hidden" name="startLng" placeholder="Longitud" id="startLng" class="form-control" required>
                                <input type="hidden" name="endLat" placeholder="Latitud" id="endLat" class="form-control" required>
                                <input type="hidden" name="endLng" placeholder="Longitud" id="endLng" class="form-control" required>
                                <!-- Boton Start y Siguiente -->
                                <div class="center">
                                        <input type="button" value="Punto de Inicio" onclick="startPoint()" class="btn-green btn-separate" id="btnStart">
                                        <!-- <input type="button" value="Siguiente Punto" onclick="nextPoint()" class="btn-green btn-separate" id="btnCont"> -->
                                        <input type="button" value="Punto de Final" onclick="endPoint()" class="btn-green btn-separate" id="btnEnd">
                                    </div><br>
                                <div id="mapa" style="width:100%;height:300px;"></div><br>
                                <!-- Boton Guardar Contenedor -->
                                <button class="btn-green btn-block">Guardar</button>
                            </form>
                        </div>
                        <hr>
<!--                         <div class="center">
                            <button class="btn-green">Agregar</button>
                            <form action="" method="POST" class="tipe-form form-inline my-2 my-lg-0">
                                <input type="text" name="buscar" class="form-style" placeholder="Buscar" />
                                <button class="btn-form" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div> -->
                        <!-- Tabla Contenedores -->
                        <div class='table-responsive'>

                            <!-- <table class='table'>
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
                </table> -->
                        </div>
                    </div>
                </div>
        </div>
        <script type="text/javascript">
            startMapRuta();
        </script>
        <?php

        include_once URL_APP . '/views/custom/footer.php';

        ?>