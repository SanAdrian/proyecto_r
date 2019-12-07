<?php

function insertarImg()
    {
        $carpeta = 'C:/xampp/htdocs/proyecto_r/public/img/imagenesPerfil/';
        opendir($carpeta);
        $rutaImagen = 'img/imagenesPerfil/' . $_FILES['imagen']['name'];
        $ruta = $carpeta . $_FILES['imagen']['name'];
        copy($_FILES['imagen']['tmp_name'], $ruta);

        $datos = [
            'idusuario' => trim($_POST['id_user']),
            'ruta' => $rutaImagen
        ];

        if ($this->usuario->insertarPerfil($datos)) {
            redirection('/home');
        } else {
            echo 'El perfil no se ha guardado';
        }
    }

    
 $query = ('INSERT INTO perfil (imagen) VALUES ($rutaImagen)');


        if ($this->db->execute()) {
            return true;
        }   
?>