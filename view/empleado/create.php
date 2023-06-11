<?php
require_once("c://xampp/htdocs/Proyectos/ProyectoMVC/view/head/header.php");

?>

<div class="form mx-4">
    <form class="form" action="store.php" method="POST" autocomplete="off" style="width: 40%;">
        <div class="mb-3">
            <label for="txtname" class="form-label">Nombre</label>
            <input type="text" class="form-control"  name="nombre" required id="txtname" aria-describedby="helpId" placeholder="Ingrese su nombre">
        </div>
        <div class="mb-3">
            <label for="txtapellido" class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="apellido" required id="txtapellido" aria-describedby="helpId" placeholder="Ingrese su apellido">
        </div>
        <div class="mb-3">
            <label for="txtedad" class="form-label">Edad</label>
            <input type="text" class="form-control" name="edad" required id="txtedad" aria-describedby="helpId" placeholder="Ingrese su edad">
        </div>
        <div class="mb-3">
            <label for="txttelefono" class="form-label">Telefono</label>
            <input type="text" class="form-control" name="telefono" required id="txttelefono" aria-describedby="helpId" placeholder="Ingrese su telefono">
        </div>
        <div class="button mt-4">
            <button type="submit" class="btn btn-primary me-2">Guardar</button>
            <button type="button" class="btn btn-danger">Cancelar</button>
        </div>
    </form>
</div>


<?php
require_once("c://xampp/htdocs/Proyectos/ProyectoMVC/view/head/footer.php");
?>