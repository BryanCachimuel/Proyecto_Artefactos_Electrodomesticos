<?php
    require_once("../head/header.php");
    if(empty($_SESSION['usuario'])){
        header("Location:iniciar_sesion.php");
    }
    require_once("c://xampp/htdocs/proyecto_artefactos/controller/informacionController.php");
    $obj = new InformacionController();
    $informacion = $obj->verlistaInformacion();
?>

<div class="container mt-4">
  <div class="row">
    <div class="col-4">
      <div class="card">
        <div class="card-header bg-primary">
          <h4 class="text-white"><i class="fa-solid fa-newspaper"></i> Agregar Información</h4>
        </div>
        <div class="card-body">
          <form action="/proyecto_artefactos/helpers/informacionformulario.php" method="POST">
            <div class="mb-3">
              <label for="contenido" class="form-label">Tipos de Productos:</label>
              <input type="text" name="contenido" class="form-control" id="contenido">
            </div>
            <div class="mb-3">
              <label for="direccion" class="form-label">Dirección: </label>
              <input type="text" name="direccion" class="form-control" id="direccion">
            </div>
            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripción:</label>
              <textarea class="form-control" name="descripcion"  id="descripcion" rows="2"></textarea>
            </div> 
            <div class="mb-3">
              <label for="contacto" class="form-label">Contacto 1:</label>
              <input type="text" name="contacto" class="form-control" id="contacto">
            </div>
            <div class="mb-3">
              <label for="contacto2" class="form-label">Contacto 2: </label>
              <input type="text" name="contacto2" class="form-control" id="contacto2">
            </div>
              <button type="submit" class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i> Agregar</button>
              <a href="agregarInformacion.php" class="btn btn-danger"><i class="fa-solid fa-circle-xmark"></i> Cancelar</a>
            </form>
        </div>
      </div>
    </div>

    <div class="col-8">
    <?php foreach($informacion as $info) : ?>
      <div class="card mb-4">
        <card-body>
            <div class="container mt-2">
             <div class="form-group row">
              <label for="contenido" class="col-sm-2 col-form-label">Tipos:</label>
                <div class="col-sm-4"> 
                  <input type="text" name="contenido" class="form-control" id="contenido" value="<?= $info[1] ?>" disabled>
                </div>
                <label for="direccion" class="col-sm-2 col-form-label">Dirección: </label>
                <div class="col-sm-4"> 
                  <input type="text" name="direccion" class="form-control" id="direccion"  value="<?= $info[3] ?>" disabled>
                </div>
              </div>  
                <div class="mb-3">
                  <label for="descripcion" class="form-label">Descripción:</label>
                  <textarea class="form-control" name="descripcion"  id="descripcion" rows="2" disabled ><?= $info[2] ?></textarea>
                </div> 
                <div class="form-group row mb-3">
                 <label for="contacto" class="col-sm-2 col-form-label">Contacto 1:</label>
                  <div class="col-sm-4">
                    <input type="text" name="contacto" class="form-control" id="contacto" value="<?= $info[4] ?>" disabled>
                  </div>
                  <label for="contacto2" class="col-sm-2 col-form-label">Contacto 2: </label>
                   <div class="col-sm-4">
                    <input type="text" name="contacto2" class="form-control" id="contacto2" value="<?= $info[5] ?>" disabled>
                  </div>
                </div>
                <div class="mb-3 mt-3">
                    <a href="editarInformacion.php?id=<?= $info[0] ?>" class="btn btn-success"><i class="fa-regular fa-pen-to-square"></i> Actualizar</a>
                    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#id<?=$info[0]?>"><i class="fa-solid fa-trash-can"></i> Eliminar</a>
                </div>
            </div>
        </card-body>
      </div>

        <!-- Modal -->
        <div class="modal fade" id="id<?=$info[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar este registro?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                   <h3><?=$info[1]?></h3>
                </div>
                <div class="modal-footer">
                  <a href="/proyecto_artefactos/helpers/eliminarInformacion.php?id=<?= $info[0]?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Eliminar</a>
                  <button type="button" class="btn btn-success" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Cancelar</button>
                </div>
              </div>                         
            </div>
        </div>

      <?php endforeach; ?>
    </div>
  </div>
</div>

<?php
    require_once("../head/footer.php")
?>