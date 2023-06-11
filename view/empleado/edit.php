<?php
require_once("c://xampp/htdocs/Proyectos/ProyectoMVC/view/head/header.php");
require_once("/xampp/htdocs/Proyectos/ProyectoMVC/controller/empleadoController.php");

$objEmpleado = new EmpleadoController(); 
$id = $_GET["id"];
$arrData = $objEmpleado->edit($id);

?>

<div class="form mx-4">
    <form class="form" action="update.php" method="POST" autocomplete="off" style="width: 40%;">
        <div class="mb-3">
            <label for="txtname" class="form-label">Nombre</label>
            <input type="hidden" class="form-control" name="id" value="<?php echo $arrData[0]->Id ?>" required id="txtid" aria-describedby="helpId" placeholder="Ingrese su Id">
            <input type="text" class="form-control" name="nombre" value="<?php echo $arrData[0]->Nombre ?>" required id="txtname" aria-describedby="helpId" placeholder="Ingrese su nombre">
        </div>
        <div class="mb-3">
            <label for="txtapellido" class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="apellido" value="<?php echo $arrData[0]->Apellido ?>" required id="txtapellido" aria-describedby="helpId" placeholder="Ingrese su apellido">
        </div>
        <div class="mb-3">
            <label for="txtedad" class="form-label">Edad</label>
            <input type="text" class="form-control" name="edad" value="<?php echo $arrData[0]->Edad ?>" required id="txtedad" aria-describedby="helpId" placeholder="Ingrese su edad">
        </div>
        <div class="mb-3">
            <label for="txttelefono" class="form-label">Telefono</label>
            <input type="text" class="form-control" name="telefono" value="<?php echo $arrData[0]->Telefono ?>"  required id="txttelefono" aria-describedby="helpId" placeholder="Ingrese su telefono">
        </div>
        <div class="button mt-4">
            <button type="submit" class="btn btn-primary me-2">Actualizar</button>
            <a href="/Proyectos/ProyectoMVC/index.php" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
</div>


<?php
require_once("c://xampp/htdocs/Proyectos/ProyectoMVC/view/head/footer.php");
?>