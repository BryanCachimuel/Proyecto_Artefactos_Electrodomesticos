<?php
    require_once("../head/header.php");
    if(empty($_SESSION['usuario'])){
        header("Location:iniciar_sesion.php");
    }
    require_once("c://xampp/htdocs/proyecto_artefactos/controller/marcasController.php");
    $obj = new MarcasController();
    $mcartefactos = $obj->verMarcasporId($_GET['id']);
?>

<div class="container mt-3 mx-auto col-4">
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="text-white">Editar Información</h3>
        </div>
        <div class="card-body">
            <form action="/proyecto_artefactos/helpers/marcas/actualizarMarca.php" method="POST" autocomplete="off">
                <div>
                    <input type="hidden" name="id" class="form-control" id="id" value="<?= $mcartefactos['id'] ?>">
                </div>
                <div class="form-group row mb-3">
                    <label for="contenido" class="col-sm-2 col-form-label">Marca:</label>
                    <div class="col-sm-4"> 
                        <input type="text" name="marcas" class="form-control" id="marcas" value="<?= $mcartefactos['marcas'] ?>">
                    </div>
                    <label for="direccion" class="col-sm-2 col-form-label">País: </label>
                    <div class="col-sm-4"> 
                        <input type="text" class="form-control" name="pais"  id="pais" value="<?= $mcartefactos['pais'] ?>">
                    </div>
                </div>  
                <div class="mb-3">
                    <label for="nombre_proveedor" class="form-label">Nombre Proveedor: </label>
                    <input type="text" name="nombre_proveedor" class="form-control" id="nombre_proveedor" value="<?= $mcartefactos['nombre_proveedor'] ?>">
                </div>
                <div class="mb-3">
                    <label for="contacto_proveedor" class="form-label">Contacto Proveedor:</label>
                    <input type="text" name="contacto_proveedor" class="form-control" id="contacto_proveedor"  value="<?= $mcartefactos['contacto_proveedor'] ?>">
                </div>
                <button type="submit" class="btn btn-primary">Editar Marca</button>
                <a href="agregarMarcas.php" class="btn btn-warning">Cancelar</a>
            </form>
        </div>
    </div>  
</div>


<?php
    require_once("../head/footer.php")
?>