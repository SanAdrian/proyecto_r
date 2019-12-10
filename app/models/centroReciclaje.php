<?php

class centroReciclaje
{

    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }


    public function getCentros()
    {
        $this->db->query('SELECT C.IdCentroReciclaje, C.latCoords, C.lngCoords, P.nombreCompleto, R.tipoResiclador FROM centroreciclaje C 
                        INNER JOIN tiporeciclador R ON R.IdTipoReciclador = C.typeRecycler
                        INNER JOIN perfil P ON P.idUsuario = C.idUser');
        return $this->db->registers();
    }

    public function getMarcadores()
    {
        $this->db->query('SELECT  C.IdCentroReciclaje, C.latCoords, C.lngCoords, C.typeRecycler FROM centroreciclaje C');
        return $this->db->registers();
    }

/*     public function getInfoMarkers()
    {
        $this->db->query('SELECT T.tipoCont, B.barrio, C.direccionCont FROM contenedores C
                        INNER JOIN tipocontenedor T ON T.idTipoCont = C.tipoCont
                        INNER JOIN barrios B ON B.idBarrio = C.barrioCont');
        return $this->db->registers();
    } */

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

/*     public function insertarContainer($datos)
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
    } */

}
