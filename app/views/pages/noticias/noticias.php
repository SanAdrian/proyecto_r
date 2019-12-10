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
            <h4>GALERIA DE NOTICIAS</h4>
            <p>LAS NOTICIAS QUE MÁS TE INTERESAN
                <!-- <span class="badge badge-pill badge-primary"><?php /* echo $datos['cantidadUsuarios'] */ ?></span> -->
            </p>
            <hr>
            <button type="button" class="btn-green" data-toggle="modal" data-target="#myModal">Nueva Noticias</button>

            <!-- Coso Noticias -->
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <!-- Noticias -->
                        <?php foreach ($datos['noticias'] as $noticia) : ?>
                            <div class="col-md-4">
                                <div class="card mb-4 shadow-sm">
                                    <img src="<?php echo URL_PROJECT ?>/<?php echo $noticia->imagen ?>" alt="" width="100%" height="150px">
                                    <div id="truncar">
                                        <div class="card-body">
                                            <p class="card-text"><?php echo $noticia->descripcion ?></p>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <a class="btn btn-sm btn-outline-secondary" target="_blank" href="<?php echo $noticia->link ?>">Ver</a>
                                                <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                            </div>
                                            <small class="text-muted"><?php echo fecha($noticia->dateNoti) ?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>


            <div class="modal" id="myModal">
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
                                    <input type="text" name="link" class="form-control" placeholder="URL de la noticia" required>
                                    <!-- <input type="textarea" name="descripcion" class="form-control" placeholder="Ingresa una descripción" required> -->
                                    <textarea name="descripcion" class="form-control" placeholder="Ingresa una descripción" required></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="imagen" id="imagen" required>
                                        <label class="custom-file-label" for="imagen">Seleccionar una foto</label>
                                    </div>
                                </div>
                                <button class="btn-green btn-block">Registrar Noticia</button>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
                    </div>
                </div>
            </div>


        </div>

        <footer>
            <p class="copyright">GALERIA DE PROYECTO_R</p>
        </footer>
    </div>
</div>
</div>



<?php


function fecha ( $fecha ) {
    # strtotime = convierte una cadena de texto a time;
    $timestamp = strtotime( $fecha );
    $meses = [ 'Entero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre', 'Octubre','Noviembre','Diciembre' ];
    $dia = date( 'd', $timestamp ); # con esto se obtiene los días;
    $mes = date( 'm', $timestamp ) - 1;
    $year = date( 'Y', $timestamp );

    $fecha = $dia.' de '.$meses[$mes].' del '.$year;
    return $fecha;
}

include_once URL_APP . '/views/custom/footer.php';
?>
