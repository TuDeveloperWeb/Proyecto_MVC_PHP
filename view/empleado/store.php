<?php 

    include_once("/xampp/htdocs/Proyectos/ProyectoMVC/controller/EmpleadoController.php");

    $obj = new EmpleadoController();

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];


    $obj->store($nombre,$apellido,$edad,$telefono);

?>