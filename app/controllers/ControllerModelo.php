<?php

class ControllerName extends Controller{


    public function __construct()
    {
        $this->usuario = $this->model('usuario');
        $this->publicaciones = $this->model('publicar');

    }

    public function nameOpcion()
    {       
        $datosUsuario = $this->usuario->getUsuario($_SESSION['usuario']);
        $datosPerfil = $this->usuario->getPerfil($_SESSION['logueado']);
        $misNotificaciones = $this->publicaciones->getNotificaciones($_SESSION['logueado']);
        $misMensajes = $this->publicaciones->getMensajes($_SESSION['logueado']);


        if ($datosPerfil) {
            $datosRed = [
                'usuario' => $datosUsuario,
                'perfil' => $datosPerfil,
                'misNoticaciones' => $misNotificaciones,
                'misMensajes' => $misMensajes,
            ];
            $this->view('pages/folder/file', $datosRed);
        } else {
            redirection('/home');
        }
        
    }
    
    

}