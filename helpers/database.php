<?php

class DB_Connection {

    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db_name = "cambridgeCollege";

    public function __constructor(){}

    public function connect(){

    $connection = mysqli_connect($this->host,$this->user,$this->password,$this->db_name);
    return $connection;

    }
}


?>