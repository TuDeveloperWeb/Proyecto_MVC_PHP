<?php 

    class db {
        private $host = "localhost";
        private $dbname = "Empresa";
        private $user = "root";
        private $pass = "";

        public function conexion(){
            try {
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
                $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $PDO;
            } catch (PDOException $e) {
                return  $e->getMessage();
            }
        }
    }



?>