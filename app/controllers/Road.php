<?php

class Road extends Controller{


    public function __construct()
    {
        $this->ruta = $this->model('ruta');
        $this->usuario = $this->model('usuario');
        $this->publicaciones = $this->model('publicar');

    }

    public function rutas()
    {       
        $datosUsuario = $this->usuario->getUsuario($_SESSION['usuario']);
        $datosPerfil = $this->usuario->getPerfil($_SESSION['logueado']);
        $misNotificaciones = $this->publicaciones->getNotificaciones($_SESSION['logueado']);
        $misMensajes = $this->publicaciones->getMensajes($_SESSION['logueado']);
        $barrios = $this->ruta->getBarrios();
        $dias = $this->ruta->getDias();
        $horarios = $this->ruta->getHorarios();


        if ($datosPerfil) {
            $datosRed = [
                'usuario' => $datosUsuario,
                'perfil' => $datosPerfil,
                'misNoticaciones' => $misNotificaciones,
                'misMensajes' => $misMensajes,
                'barrios' => $barrios,
                'dias' => $dias,
                'horarios' => $horarios,
            ];
            $this->view('pages/rutas/rutas', $datosRed);
        } else {
            redirection('/home');
        }
        
    }
    
    

}