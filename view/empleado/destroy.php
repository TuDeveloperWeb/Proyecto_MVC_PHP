<?php 

    require_once("/xampp/htdocs/Proyectos/ProyectoMVC/controller/EmpleadoController.php");
    $objEmpleado = new EmpleadoController();
    $id = $_GET["id"];

    $objEmpleado->destroy($id);

?>