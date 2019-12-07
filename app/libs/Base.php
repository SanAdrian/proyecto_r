<?php

session_start();

class Base
{
    private $host = DB_HOST;
    private $dbname = DB_NAME;
    private $user = DB_USER;
    private $password = DB_PASSWORD;

    private $dbh; //Conecta a la base de datos
    private $stmt; // Llama registros
    private $error; // Varriable para manejo de errores
    /* CONEXION BASE DE DATOS */
    public function __construct()
    {
        $dns = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;

        $option = [
            PDO::ATTR_ERRMODE => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh = new PDO($dns, $this->user, $this->password, $option);
            $this->dbh->exec('set names utf8');
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    /* Funcion que recive las consultas */
    public function query($sql)
    {
        return $this->stmt = $this->dbh->prepare($sql);
    }

    /* Identifica y enlaza las variables que enviamos */
    public function bind($parametro, $valor, $tipo = null)
    {
        if (is_null($tipo)) {
            switch (true) {
                case is_int($valor):
                    $tipo = PDO::PARAM_INT;
                    break;
                case is_bool($valor):
                    $tipo = PDO::PARAM_BOOL;
                    break;
                case is_null($valor):
                    $tipo = PDO::PARAM_NULL;
                    break;
                default:
                    $tipo = PDO::PARAM_STR;
                    break;
            }
        }
        return $this->stmt->bindValue($parametro, $valor, $tipo);
    }

    /* Ejecuta la consulta */
    public function execute()
    {
        return $this->stmt->execute();
    }

    /* Llama un fetch de todos los registros */
    public function registers()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /* Llama solo un registro */
    public function register()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    /* Cuenata las filas */
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}
