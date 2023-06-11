<?php 

    class UserController{
        private $model;
        public function __construct() {
            require_once("/xampp/htdocs/Proyectos/ProyectoMVC/model/UserModel.php");
            $this->model = new UserModel();

        }

        public function guardar($nombre)
        {
            $id = $this->model->insertar($nombre);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }

        public function show($id)
        {
            return ($this->model->show($id) !=false) ? $this->model->show($id) : header("location:index.php");
        }


    }



?>