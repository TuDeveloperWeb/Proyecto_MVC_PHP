<?php 

    class EmpleadoModel{

        Private $PDO;

        public function __construct()
        {
            require_once("/xampp/htdocs/Proyectos/ProyectoMVC/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }

        public function index()
        {
            $stament = $this->PDO->prepare("Select * From Empleado");
            return ($stament->execute())? $stament->fetchAll(PDO::FETCH_OBJ) : false;
        }


        public function insertar($nombre,$apellido,$edad,$telefono){

            $stament = $this->PDO->prepare("Insert Into Empleado Values (null,:nombre,:apellido,:edad,:telefono)");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":apellido",$apellido);
            $stament->bindParam(":edad",$edad);
            $stament->bindParam(":telefono",$telefono);

            return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
        }

        public function edit($id)
        {
            $stament = $this->PDO->prepare("Select * From Empleado Where Id=:id");
            $stament->bindParam(":id",$id);

            return ($stament->execute())? $stament->fetchAll(PDO::FETCH_OBJ) : false;
        }


        public function update($id,$nombre,$apellido,$edad,$telefono)
        {
            $stament = $this->PDO->prepare("Update Empleado set Nombre=:nombre,Apellido=:apellido,Edad=:edad,Telefono=:telefono Where Id=:id");
            $stament->bindParam(":id",$id);
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":apellido",$apellido);
            $stament->bindParam(":edad",$edad);
            $stament->bindParam(":telefono",$telefono);
            
            return ($stament->execute())? $id : false;
        
        }

        public function destroy($id)
        {
            $stament = $this->PDO->prepare("Delete From Empleado Where id=:id");
            $stament->bindParam(":id",$id);
            
            return ($stament->execute())? $id : false;
        }


    }



?>