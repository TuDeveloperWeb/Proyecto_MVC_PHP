<?php 

    class EmpleadoController{
        Private $model;

        public function __construct() {
            require_once("/xampp/htdocs/Proyectos/ProyectoMVC/model/EmpleadoModel.php");
            $this->model = new EmpleadoModel();
        }

        public function index()
        {
            return ($this->model->index() != false ) ? $this->model->index() : "Error Al Cargar";
        }
        public function store($nombre,$apellido,$edad,$telefono){

            $id = $this->model->insertar($nombre,$apellido,$edad,$telefono);
            return ($id != false)? header("Location: /Proyectos/ProyectoMVC/index.php") :header("location : create.php");
        }

        public function edit(Int $id)
        {
            return ($this->model->edit($id) != false) ? $this->model->edit($id) : "<h1>Error de carga</h1>";
        }

        public function update($id,$nombre,$apellido,$edad,$telefono)
        {
            return ($this->model->update($id,$nombre,$apellido,$edad,$telefono) != false )? header("Location: /Proyectos/ProyectoMVC/index.php"): header("Location: /Proyectos/ProyectoMVC/view/edit?=".$id); 
        }

        public function destroy($id)
        {
            return ($this->model->destroy($id) !=false)? header("Location: /Proyectos/ProyectoMVC/index.php") :"Error al Eliminar";
        }

    }



?>