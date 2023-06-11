<?php 

    require_once("/xampp/htdocs/Proyectos/ProyectoMVC/controller/EmpleadoController.php");
    $objEmpleado = new EmpleadoController();
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = $_POST["edad"];
    $telefono = $_POST["telefono"];

    $objEmpleado->update($id,$nombre,$apellido,$edad,$telefono);

?>