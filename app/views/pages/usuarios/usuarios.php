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
            <h4>Usuarios</h4>
            <p>Total de usuarios: <span class="badge badge-pill badge-primary"><?php echo $datos['cantidadUsuarios'] ?></span></p>
            <hr>
            <!-- div Usuario -->
            <div class="lista-de-usuarios-registrados">
                <?php foreach ($datos['allUsuarios'] as $usuariosRegistrados) : ?>
                    <div class="elemento-usuario-registrado">
                        <img src="<?php echo URL_PROJECT . '/' . $usuariosRegistrados->fotoPerfil ?>" alt="" class="image-big-user mr-2">
                        <div class="nombre-usuario-registrado">
                            <?php echo $usuariosRegistrados->nombreCompleto ?> - <a href="<?php echo URL_PROJECT ?>/perfil/<?php echo $usuariosRegistrados->usuario ?>"><?php echo $usuariosRegistrados->usuario ?></a>
                        </div>
                    </div>
                    <hr>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>



<?php

include_once URL_APP . '/views/custom/footer.php';
