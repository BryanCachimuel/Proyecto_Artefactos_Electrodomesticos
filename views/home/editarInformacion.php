<?php
    require_once("../head/header.php");
    if(empty($_SESSION['usuario'])){
        header("Location:iniciar_sesion.php");
    }
    require_once("c://xampp/htdocs/proyecto_artefactos/controller/informacionController.php");
    $obj = new InformacionController();
    $informacion = $obj->verInformacionporId($_GET['id']);
?>

<div class="container mt-3 mx-auto col-4">
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="text-white">Editar Información</h3>
        </div>
        <div class="card-body">
            <form action="/proyecto_artefactos/helpers/actualizarInformacion.php" method="POST" autocomplete="off">
                <div>
                    <input type="hidden" name="id" class="form-control" id="id" value="<?= $informacion['id'] ?>">
                </div>
                <div class="mb-3">
                    <label for="contenido" class="form-label">Contenido:</label>
                    <input type="text" name="contenido" class="form-control" id="contenido" value="<?= $informacion['contenido'] ?>">
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción:</label>
                    <textarea class="form-control" name="descripcion"  id="descripcion" rows="2"><?= $informacion['describir'] ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección: </label>
                    <input type="text" name="direccion" class="form-control" id="direccion" value="<?= $informacion['direccion'] ?>">
                </div>
                <div class="mb-3">
                    <label for="contacto" class="form-label">Contacto 1:</label>
                    <input type="text" name="contacto" class="form-control" id="contacto"  value="<?= $informacion['contacto'] ?>">
                </div>
                <div class="mb-3">
                    <label for="contacto2" class="form-label">Contacto 2: </label>
                    <input type="text" name="contacto2" class="form-control" id="contacto2"  value="<?= $informacion['contacto2'] ?>">
                </div>
                <button type="submit" class="btn btn-primary">Editar Información</button>
                <a href="agregarInformacion.php" class="btn btn-warning">Cancelar</a>
            </form>
        </div>
    </div>  
</div>

<?php
    require_once("../head/footer.php")
?>