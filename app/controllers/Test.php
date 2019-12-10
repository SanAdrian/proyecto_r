<?php

class Test
 extends Controller{


    public function __construct()
    {
        $this->prueba = $this->model('prueba');
        $this->usuario = $this->model('usuario');
        $this->publicaciones = $this->model('publicar');
        $this->contenedor = $this->model('contenedor');

    }

    public function pruebas()
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
            $tiposUser = $this->usuario->getTypeUsers();
            $tiposReciclador = $this->usuario->getTypeRecycler();
            $tiposResiduo = $this->contenedor->getTypeResiduos();
            $barrios = $this->contenedor->getBarrios();


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
                    'tiposUser' => $tiposUser,
                    'tiposReciclador' => $tiposReciclador,
                    'tiposResiduo' => $tiposResiduo,
                    'barrios' => $barrios,
                ];
                $this->view('pages/test/test', $datosRed);
            } else {
                redirection('/home');
            }
        }
        
    }
    
    

}