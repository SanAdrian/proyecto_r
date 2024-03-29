<?php

class Home extends Controller
{
    public function __construct()
    {
        $this->usuario = $this->model('usuario');
        $this->publicaciones = $this->model('publicar');
        $this->contenedor = $this->model('contenedor');
    }

    public function index()
    {
        if (isset($_SESSION['logueado'])) {

            $datosUsuario = $this->usuario->getUsuario($_SESSION['usuario']);
            $datosPerfil = $this->usuario->getPerfil($_SESSION['logueado']);

            $datosPublicaciones = $this->publicaciones->getPublicaciones();
            $verificarLike = $this->publicaciones->misLikes($_SESSION['logueado']);
            $comentarios = $this->publicaciones->getComentarios();
            $informacionComentarios = $this->publicaciones->getInformacionComentarios($comentarios);
            $misNotificaciones = $this->publicaciones->getNotificaciones($_SESSION['logueado']);
            $misMensajes = $this->publicaciones->getMensajes($_SESSION['logueado']);
            $tiposUser = $this->usuario->getTypeUsers();
            $tiposReciclador = $this->usuario->getTypeRecycler();

            if ($datosPerfil) {
                $datosRed = [
                    'usuario' => $datosUsuario,
                    'perfil' => $datosPerfil,
                    'publicaciones' => $datosPublicaciones,
                    'misLikes' => $verificarLike,
                    'comentarios' => $informacionComentarios,
                    'misNoticaciones' => $misNotificaciones,
                    'misMensajes' => $misMensajes
                ];

                $this->view('pages/home', $datosRed);

            } else {
                $datosRed = [
                    'Idusuario' => $_SESSION['logueado'],
                    'tiposUser' => $tiposUser,
                    'tiposReciclador' => $tiposReciclador,
                    
                ];
                $this->view('pages/perfil/completarPerfil', $datosRed);
            }
        } else {
            redirection('/home/login');
        }
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datosLogin = [
                'usuario' => trim($_POST['usuario']),
                'contrasena' => trim($_POST['contrasena'])
            ];

            $datosUsuario = $this->usuario->getUsuario($datosLogin['usuario']);

            if ($this->usuario->verificarContrasena($datosUsuario, $datosLogin['contrasena'])) {
                $_SESSION['logueado'] = $datosUsuario->idusuario;
                $_SESSION['usuario'] = $datosUsuario->usuario;
                redirection('/home');
            } else {
                $_SESSION['errorLogin'] = 'El usuario o la contraseña son incorrectos';
                redirection('/home');
            }
        } else {
            if (isset($_SESSION['logueado'])) {
                redirection('/home');
            } else {
                $this->view('pages/login-register/login');
            }
        }
    }
/* REGISTRO DE NUEVOS USUARIOS */
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datosRegistro = [
                'privilegio' => '1', 
                'email' => trim($_POST['email']),//recive datos del formulario de registro
                'usuario' => trim($_POST['usuario']),//recive datos del formulario de registro
                'contrasena' => password_hash(trim($_POST['contrasena']), PASSWORD_DEFAULT)//recive datos del formulario de registro
            ];
            /* Verificacion de usuario existente */
            if ($this->usuario->verificarUsuario($datosRegistro)) {
                if ($this->usuario->register($datosRegistro)) {
                    $_SESSION['loginComplete'] = 'Tu registro se ha completado satisfactoriamente, ahora puedes ingresar';
                    redirection('/home');
                } else { }
            } else {
                $_SESSION['usuarioError'] = 'El usuario no esta disponible, intenta con otro usuario';
                $this->view('pages/login-register/register');
            }
        } else {
            if (isset($_SESSION['logueado'])) {
                redirection('/home');
            } else {
                $this->view('pages/login-register/register');
            }
        }
    }


    public function insertarRegistrosPerfil()
    {
        $carpeta = 'C:/xampp/htdocs/proyecto_r/public/img/imagenesPerfil/';
        opendir($carpeta);
        $rutaImagen = 'img/imagenesPerfil/' . $_FILES['imagen']['name'];
        $ruta = $carpeta . $_FILES['imagen']['name'];
        copy($_FILES['imagen']['tmp_name'], $ruta);

        $datos = [
            'idusuario' => trim($_POST['id_user']),
            'nombre' => trim($_POST['nombre']),
            'tipoUser' =>trim($_POST['tipoUser']),
            'mylat' =>trim($_POST['myLat']),
            'mylng' =>trim($_POST['myLng']),
            'tipoRecycler' =>trim($_POST['tipoCentro']),
            'mylatCenter' =>trim($_POST['myLatCenter']),
            'mylngCenter' =>trim($_POST['myLngCenter']),
            'ruta' => $rutaImagen
        ];

        if ($this->usuario->insertarPerfil($datos)) {
            redirection('/home');
        } else {
            echo 'El perfil no se ha guardado';
        }
    }

    public function logout()
    {
        session_start();

        $_SESSION = [];

        session_destroy();

        redirection('/home');
    }

    public function usuarios()
    {
        if (isset($_SESSION['logueado'])) {

            $datosUsuario = $this->usuario->getUsuario($_SESSION['usuario']);
            $datosPerfil = $this->usuario->getPerfil($_SESSION['logueado']);
            $misNotificaciones = $this->publicaciones->getNotificaciones($_SESSION['logueado']);
            $misMensajes = $this->publicaciones->getMensajes($_SESSION['logueado']);
            $usuariosRegistrados = $this->usuario->getAllUsuarios();
            $cantidadUsuarios = $this->usuario->getCantidadUsuarios();

            if ($datosPerfil) {
                $datosRed = [
                    'usuario' => $datosUsuario,
                    'perfil' => $datosPerfil,
                    'misNoticaciones' => $misNotificaciones,
                    'misMensajes' => $misMensajes,
                    'allUsuarios' => $usuariosRegistrados,
                    'cantidadUsuarios' => $cantidadUsuarios
                ];
                $this->view('pages/usuarios/usuarios', $datosRed);
            } else {
                redirection('/home');
            }
        }
    }




    public function buscar()
    {
        if (isset($_SESSION['logueado'])) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $busqueda = '%' . trim($_POST['buscar']) . '%';
                $datosBusqueda = $this->usuario->buscar($busqueda);

                
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
                        'resultado' => $datosBusqueda
                    ];

                    if ($datosBusqueda) {
                        $this->view('pages/busqueda/buscar' , $datosRed);
                    } else {
                        redirection('/home');
                    }
                } else {
                    redirection('/home');
                }
            } else {
                redirection('/home');
            }
        }
    }

}
