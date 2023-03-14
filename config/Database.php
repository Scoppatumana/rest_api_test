<?php

class Database {
    private $servername = "localhost";
    private $dbname = "blog";
    private $username = "root";
    private $password = "";
    private $conn;

    public function connect(){
        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=" . $this->servername . ";dbname=" . $this->dbname, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected Successfully";

        }catch(PDOException $e){
            echo "Error" . $e->getMessage();
        }

        return $this->conn;
    }
}


?>