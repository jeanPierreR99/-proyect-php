<?php

class Database{
    private $hostname = "localhost";
    private $database = "dayana-crochet";
    private $username = "root";
    private $password = "";
    private $charset = "utf8";

    function conectar()
    {
        try{
        $data = "mysql:host=".$this->hostname."; dbname=".$this->database.";charset=".$this->charset;
        $conexion = new PDO($data, $this->username, $this->password);
        return $conexion;
        }catch(PDOException $e)
        {
            echo 'error connection: '.$e->getMessage();
            exit;
        }
    }
}

?>
