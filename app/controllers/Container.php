<?php

class Container extends Controller{


    public function __construct()
    {
        $this->contenedor = $this->model('contenedor');
        $this->usuario = $this->model('usuario');
        $this->publicaciones = $this->model('publicar');

    }

    public function contenedores()
    {
        if (isset($_SESSION['logueado'])) {

            $datosUsuario = $this->usuario->getUsuario($_SESSION['usuario']);
            $datosPerfil = $this->usuario->getPerfil($_SESSION['logueado']);
            $misNotificaciones = $this->publicaciones->getNotificaciones($_SESSION['logueado']);
            $misMensajes = $this->publicaciones->getMensajes($_SESSION['logueado']);
            $allContenedores = $this->contenedor->getContenedores();
            $cantidadUsuarios = $this->usuario->getCantidadUsuarios();
            $marcadores = $this->contenedor->getMarcadores();
            $infoMarkers = $this->contenedor->getInfoMarkers();


            if ($datosPerfil) {
                $datosRed = [
                    'usuario' => $datosUsuario,
                    'perfil' => $datosPerfil,
                    'misNoticaciones' => $misNotificaciones,
                    'misMensajes' => $misMensajes,
                    'allContenedores' => $allContenedores,
                    'cantidadUsuarios' => $cantidadUsuarios,
                    'marcadores' => $marcadores,
                    'infoMarkers' => $infoMarkers,
                ];
                $this->view('pages/contenedores/contenedores', $datosRed);
            } else {
                redirection('/home');
            }
        }
    }
    
    

}