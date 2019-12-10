<?php

class contenedor
{

    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }


    public function getContenedores()
    {
        $this->db->query('SELECT C.idCont, B.barrio, C.direccionCont, C.latCont, C.lngCont, T.nombreTipoR FROM contenedores C 
                        INNER JOIN tiporesiduos T ON T.IdTipoResiduos = C.tipoCont
                        INNER JOIN barrios B ON B.idBarrio = C.barrioCont
                        ORDER BY B.barrio');
        return $this->db->registers();
    }

    public function getMarcadores()
    {
        $this->db->query('SELECT C.idCont, C.latCont, C.lngCont, C.tipoCont FROM contenedores C');
        return $this->db->registers();
    }

    public function getInfoMarkers()
    {
        $this->db->query('SELECT T.tipoCont, B.barrio, C.direccionCont FROM contenedores C
                        INNER JOIN tipocontenedor T ON T.idTipoCont = C.tipoCont
                        INNER JOIN barrios B ON B.idBarrio = C.barrioCont');
        return $this->db->registers();
    }

    public function getTypeResiduos()
    {
        $this->db->query('SELECT * FROM tiporesiduos');
        return $this->db->registers();
    }

    public function getBarrios()
    {
        $this->db->query('SELECT * FROM barrios');
        return $this->db->registers();
    }

    public function insertarContainer($datos)
    {
        $this->db->query('INSERT INTO contenedores (barrioCont, direccionCont, latCont, lngCont, tipoCOnt ) 
        VALUES (:idBarrio, :direccion,  :latCont, :lngCont, :tipoCont)');
        $this->db->bind(':idBarrio', $datos['idBarrio']);
        $this->db->bind(':direccion', $datos['direccion']);
        $this->db->bind(':latCont', $datos['latCont']);
        $this->db->bind(':lngCont', $datos['lngCont']);
        $this->db->bind(':tipoCont', $datos['tipoCont']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}
