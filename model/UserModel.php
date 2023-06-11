<?php

    class UserModel
    {
        private $PDO;
        public function __construct()
        {
            require_once("C://xampp/htdocs/Proyectos/ProyectoMVC/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();    
        }


        public function show()
        {
            $stament = $this->PDO->prepare("Select * From Empleado");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }


        public function insertar ($nombre)
        {
            $stament = $this->PDO->prepare("Insert Into User  Values (null,:nombre)");
            $stament->bindParam(':nombre', $nombre);

            return  ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
            
        }

        /* fech : Solo te devuelve un registro y no se pone un indice prueba[0] = 15,etc */
        // public function show ($id)
        // {
        //     $stament = $this->PDO->prepare("Select * From User Where id = :id");
        //     $stament->bindParam(':id',$id);

        //     return ($stament->execute()) ? $stament->fetch() : false ;
        // }

    }

    $objUser = new UserModel();
    print_r($objUser->show());

?>