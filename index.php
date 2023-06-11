<?php
require_once("c://xampp/htdocs/Proyectos/ProyectoMVC/view/head/header.php");
require_once("/xampp/htdocs/Proyectos/ProyectoMVC/controller/empleadoController.php");

$objEmpleado = new EmpleadoController();
$arrEmpleado = $objEmpleado->index();

?>

<div class="container ">
    <div class="btn-action text-end">
        <a class="btn btn-primary" href="/Proyectos/ProyectoMVC/view/empleado/create.php" style="font-weight: bold;">Agregar Nuevo</a>  
     </div>

     <div class=" tabla-Listado">
            <div class="tabla-header">
                <h2 class="text-center" style="font-weight: bold;">Listado de Empleados</h2>
            </div>

            <div class="tabla-body mt-4">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th class="text-left" style="width:4%;">Id</th>
                                <th class="" style="width:25%">Nombre</th>
                                <th class="" style="width:20%;">Apellido</th>
                                <th class="text-center" style="width:5%;">Edad</th>
                                <th class="text-center" style="width:20%">Telefono</th>
                                <th class="text-center" style="width:auto">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($arrEmpleado as $item) : ?>
                            <tr>
                                <td><?php echo $item->Id ?></td>
                                <td><?php echo $item->Nombre ?></td>
                                <td><?php echo $item->Apellido ?></td>
                                <td class="text-center"><?php echo $item->Edad ?></td>
                                <td class="text-center"><?php echo $item->Telefono ?></td>
                                <td class="text-center">
                                    <a href="/Proyectos/ProyectoMVC/view/Empleado/edit.php?id=<?php echo $item->Id ?>" class="btn btn-primary">Editar</a>
                                    <a href="/Proyectos/ProyectoMVC/view/Empleado/destroy.php?id=<?php echo $item->Id ?>" class="btn btn-danger">Eliminar</a>
                                </td>
                            </tr>
                            <?php endforeach ;?>

                        </tbody>
                    </table>
                </div>

            </div>
    </div>
</div>






<?php
require_once("c://xampp/htdocs/Proyectos/ProyectoMVC/view/head/footer.php");
?>