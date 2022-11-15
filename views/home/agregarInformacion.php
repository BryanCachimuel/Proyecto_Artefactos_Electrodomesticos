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
    <div class="col-5">
      <div class="card">
        <div class="card-header bg-primary">
          <h3 class="text-white">Agregar Información</h3>
        </div>
        <div class="card-body">
          <form action="/proyecto_artefactos/helpers/informacionformulario.php" method="POST">
            <div class="mb-3">
              <label for="contenido" class="form-label">Contenido:</label>
              <input type="text" name="contenido" class="form-control" id="contenido">
            </div>
            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripción:</label>
              <textarea class="form-control" name="descripcion"  id="descripcion" rows="2"></textarea>
            </div>
            <div class="mb-3">
              <label for="direccion" class="form-label">Dirección: </label>
              <input type="text" name="direccion" class="form-control" id="direccion">
            </div>
            <div class="mb-3">
              <label for="contacto" class="form-label">Contacto 1:</label>
              <input type="text" name="contacto" class="form-control" id="contacto">
            </div>
            <div class="mb-3">
              <label for="contacto2" class="form-label">Contacto 2: </label>
              <input type="text" name="contacto2" class="form-control" id="contacto2">
            </div>
              <button type="submit" class="btn btn-primary">Agregar Información</button>
              <a href="agregarInformacion.php" class="btn btn-warning">Cancelar</a>
            </form>
        </div>
      </div>
    </div>

    <div class="col-7">
    <?php foreach($informacion as $info) : ?>
      <div class="card mb-4">
        <card-body>
            <div class="container mt-2">
             <div class="form-group row">
              <label for="contenido" class="col-sm-2 col-form-label">Título:</label>
                <div class="col-sm-5"> 
                  <input type="text" name="contenido" class="form-control" id="contenido" value="<?= $info[1] ?>" disabled>
                </div>
                <label for="direccion" class="col-sm-2 col-form-label">Dirección: </label>
                <div class="col-sm-3"> 
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
                    <a href="editarInformacion.php?id=<?= $info[0] ?>" class="btn btn-success">Actualizar</a>
                    <a href="" class="btn btn-danger">Eliminar</a>
                </div>
            </div>
        </card-body>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>


<?php
    require_once("../head/footer.php")
?>