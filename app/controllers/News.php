<?php

class News extends Controller{


    public function __construct()
    {
        $this->noticia = $this->model('noticia');
        $this->usuario = $this->model('usuario');
        $this->publicaciones = $this->model('publicar');

    }

    public function noticias()
    {       
        $datosUsuario = $this->usuario->getUsuario($_SESSION['usuario']);
        $datosPerfil = $this->usuario->getPerfil($_SESSION['logueado']);
        $misNotificaciones = $this->publicaciones->getNotificaciones($_SESSION['logueado']);
        $misMensajes = $this->publicaciones->getMensajes($_SESSION['logueado']);
        $noticias = $this->noticia->getNoticias();


        if ($datosPerfil) {
            $datosRed = [
                'usuario' => $datosUsuario,
                'perfil' => $datosPerfil,
                'misNoticaciones' => $misNotificaciones,
                'misMensajes' => $misMensajes,
                'noticias' => $noticias,
            ];
            $this->view('pages/noticias/noticias', $datosRed);
        } else {
            redirection('/home');
        }
        
    }
    
    public function addNew()
    {
        $carpeta = 'C:/xampp/htdocs/proyecto_r/public/img/imagenesNoticias/';
        opendir($carpeta);
        $rutaImagen = 'img/imagenesNoticias/' . $_FILES['imagen']['name'];
        $ruta = $carpeta . $_FILES['imagen']['name'];
        copy($_FILES['imagen']['tmp_name'], $ruta);

        $datos = [
            'idusuario' => trim($_POST['id_user']),
            'titulo' => trim($_POST['tituloNoti']),
            'link' => trim($_POST['link']),
            'descripcion' => trim($_POST['descripcion']),

            'ruta' => $rutaImagen
        ];

        if ($this->noticia->insertarNoticia($datos)) {
            redirection('/news/noticias');
        } else {
            echo 'El perfil no se ha guardado';
        }
    }
    

}