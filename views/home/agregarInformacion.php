<?php
    require_once("../head/header.php");
    if(empty($_SESSION['usuario'])){
        header("Location:iniciar_sesion.php");
    }
?>
<div class="container mt-4">
<div class="row">
<div class="col-6">
<div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        Agregar Información
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
            <div class="container">
                <div class="card mt-3">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="contenido" class="form-label">Contenido:</label>
                                <input type="text" name="contenido" class="form-control" id="contenido">
                            </div>
                             <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <input type="text" name="descripcion" class="form-control" id="descripcion">
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
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>


<?php
    require_once("../head/footer.php")
?>