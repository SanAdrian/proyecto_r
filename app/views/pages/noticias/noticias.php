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

include_once URL_APP . '/views/custom/footer.php';
