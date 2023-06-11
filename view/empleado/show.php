<?php
require_once("c://xampp/htdocs/Proyectos/ProyectoMVC/view/head/header.php");
require_once("c://xampp/htdocs/Proyectos/ProyectoMVC/controller/UserController.php");

$obj = new UserController();
$arrData = $obj->show($_GET['id']);
// print_r($arrData);
?>

<h2 class="h4 text-center">Detalles del Registro</h2>



<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
        </tr>
    </thead>
    <tbody>
        
        <tr> 
            <td><?=$arrData["Id"]?></td>
            <td><?=$arrData["Nombre"]?></td>
        </tr>
    </tbody>
</table>



<?php
require_once("c://xampp/htdocs/Proyectos/ProyectoMVC/view/head/footer.php");
?>