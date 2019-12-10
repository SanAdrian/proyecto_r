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
                    'tiposResiduo' => $tiposResiduo,
                    'barrios' => $barrios,
                ];
                $this->view('pages/contenedores/contenedores', $datosRed);
            } else {
                redirection('/home');
            }
        }
    }
    
    public function addContainer()
    {

        $datos = [
            'idBarrio' => trim($_POST['selectBarrio']),
            'direccion' => trim($_POST['addressCont']),
            'latCont' => trim($_POST['containerLat']),
            'lngCont' => trim($_POST['containerLng']),
            'tipoCont' => trim($_POST['tipoCont']),
        ];

        if ($this->contenedor->insertarContainer($datos)) {
            redirection('/container/contenedores');
        } else {
            echo 'El perfil no se ha guardado';
        }
    }

}