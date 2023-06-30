<?php
 class BDConnection{
    private $connection;
    public function __construct(){
        require_once('app/config/config.php');
        $this->connection = new mysqli(BD_HOST, BD_USER, BD_PASSWORD, DB_NAME);
        if($this->connection->connect_error)
        {
            die('Error de coneccion a la base de datos : '.$this->connection->connect->error);
        }
    }

    public function getConecction(){
        return $this->connection;
    }
    public function closeConnection(){
        $this->connection->close();
    }
 }
?>