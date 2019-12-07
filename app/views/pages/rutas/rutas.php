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
            <iframe src="https://www.google.com/maps/d/embed?mid=15EI0hPF-KtBnkzpK4GdlTvQA4L_qktDp" width="100%" height="100%"></iframe>
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


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCySv0nSZn3vyrRm0pVH-nCikzaaX8sQS0&callback=initMap"></script>
<?php

include_once URL_APP . '/views/custom/footer.php';

?>