<?php

class noticia
{

    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }


   
    public function insertarNoticia($datos)
    {
        $this->db->query('INSERT INTO noticias (idUsuario, tituloNoti, imagen, descripcion, link ) VALUES (:id, :tiutlo,  :rutaFoto, :descripcion, :link)');
        $this->db->bind(':id', $datos['idusuario']);
        $this->db->bind(':tiutlo', $datos['titulo']);
        $this->db->bind(':rutaFoto', $datos['ruta']);
        $this->db->bind(':descripcion', $datos['descripcion']);
        $this->db->bind(':link', $datos['link']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getNoticias()
    {
        $this->db->query('SELECT * FROM noticias ORDER BY dateNoti desc');
        return $this->db->registers();
    }


}
