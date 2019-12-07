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
        $this->db->query('SELECT C.idCont, B.barrio, C.direccionCont, C.latCont, C.lngCont, T.tipoCont FROM contenedores C 
                        INNER JOIN tipocontenedor T ON T.idTipoCont = C.tipoCont
                        INNER JOIN barrios B ON B.idBarrio = C.barrioCont');
        return $this->db->registers();
    }

    public function getMarcadores()
    {
        $this->db->query('SELECT C.idCont, C.latCont, C.lngCont FROM contenedores C');
        return $this->db->registers();
    }

    public function getInfoMarkers()
    {
        $this->db->query('SELECT T.tipoCont, B.barrio, C.direccionCont FROM contenedores C
                        INNER JOIN tipocontenedor T ON T.idTipoCont = C.tipoCont
                        INNER JOIN barrios B ON B.idBarrio = C.barrioCont');
        return $this->db->registers();
    }
}
