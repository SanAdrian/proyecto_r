<?php

class Centros extends Controller{


    public function __construct()
    {
        $this->centros = $this->model('centroReciclaje');
        $this->usuario = $this->model('usuario');
        $this->publicaciones = $this->model('publicar');

    }

    public function centrosReciclaje()
    {
        if (isset($_SESSION['logueado'])) {

            $datosUsuario = $this->usuario->getUsuario($_SESSION['usuario']);
            $datosPerfil = $this->usuario->getPerfil($_SESSION['logueado']);
            $misNotificaciones = $this->publicaciones->getNotificaciones($_SESSION['logueado']);
            $misMensajes = $this->publicaciones->getMensajes($_SESSION['logueado']);
            $allCentros = $this->centros->getCentros();
            $marcadores = $this->centros->getMarcadores();
            $tiposResiduo = $this->centros->getTypeResiduos();
            $barrios = $this->centros->getBarrios();


            if ($datosPerfil) {
                $datosRed = [
                    'usuario' => $datosUsuario,
                    'perfil' => $datosPerfil,
                    'misNoticaciones' => $misNotificaciones,
                    'misMensajes' => $misMensajes,
                    'allCentros' => $allCentros,
                    'marcadores' => $marcadores,
                    'tiposResiduo' => $tiposResiduo,
                    'barrios' => $barrios,
                ];
                $this->view('pages/centros/centros', $datosRed);
            } else {
                redirection('/home');
            }
        }
    }
    
    public function addCentro()
    {

        $datos = [
            'idBarrio' => trim($_POST['selectBarrio']),
            'direccion' => trim($_POST['addressCont']),
            'latCont' => trim($_POST['containerLat']),
            'lngCont' => trim($_POST['containerLng']),
            'tipoCont' => trim($_POST['tipoCont']),
        ];

        if ($this->centros->insertarCentro($datos)) {
            redirection('/centros/centros');
        } else {
            echo 'El perfil no se ha guardado';
        }
    }

}