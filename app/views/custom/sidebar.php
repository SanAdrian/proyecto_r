<div class="col-md-3">
    <div class="container-style-main">
        <div class="perfil-usuario-main">
            <div class="background-usuario-main"></div>
            <img src="<?php echo URL_PROJECT . '/' . $datos['perfil']->fotoPerfil ?>" alt="">
            <div class="foto-separation"></div>
            <a href="<?php echo URL_PROJECT ?>/perfil/<?php echo $datos['usuario']->usuario ?>" class="links">
                <div class="text-center nombre-perfil"><?php echo $datos['perfil']->nombreCompleto ?></div>
            </a>
            <div class="tabla-estadisticas">
                <a href="#">Publicaciones <br> 0 </a>
                <a href="#">Me gustas <br> 0 </a>
            </div>
        </div>
    </div>
    <br>
    <!-- Side Bar  -->
    <div class="container-style-main">
        <div class="perfil-usuario-main">
            <br>
            <div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="<?php echo URL_PROJECT ?>/road/rutas"><i class="fas fa-road"></i> Rutas</li>
                    <li class="list-group-item"><a href="<?php echo URL_PROJECT ?>/container/contenedores"><i class="fas fa-dumpster"></i> Contenedores</li>
                    <li class="list-group-item"><a href="<?php echo URL_PROJECT ?>/miregistro/yoreciclo"><i class="fas fa-recycle"></i> Yo Reciclo</li>
                    <li class="list-group-item"><a href="<?php echo URL_PROJECT ?>/news/noticias"><i class="fas fa-newspaper"></i> Noticias</li>
                    <li class="list-group-item"><a href="<?php echo URL_PROJECT ?>/home/usuarios"><i class="far fa-star"></i> Recomendaciones</li>
                    <li class="list-group-item"><a href="<?php echo URL_PROJECT ?>/home/usuarios"><i class="fas fa-question-circle"></i> Ayuda</li>
                    <li class="list-group-item"><a href="<?php echo URL_PROJECT ?>/home/usuarios"><i class="fas fa-user-friends"></i></span> Usuarios</a></li>
                    <li class="list-group-item"><a href="<?php echo URL_PROJECT ?>/test/pruebas"><i class="fas fa-microscope"></i></span> Test</a></li>
                </ul>
            </div>
            <br>
            <div class="background-sidebar">
                <div class="tabla-estadisticas">
                <!-- <a href="#">Publicaciones <br> 0 </a>
                    <a href="#">Me gustas <br> 0 </a> -->
                </div>
            </div>
    </div>
</div> 
 