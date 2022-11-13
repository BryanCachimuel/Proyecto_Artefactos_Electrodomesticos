<?php
     require_once("../head/header.php");
     if(empty($_SESSION['usuario'])){
         header("Location:iniciar_sesion.php");
     }
?>

<div class="container mt-4">
  <div class="row">
    <div class="col-5">
      <div class="card">
        <div class="card-header bg-primary">
          <h3 class="text-white">Agregar Producto</h3>
        </div>
        <div class="card-body">
          <form action="/proyecto_artefactos/helpers/productosformulario.php" method="POST">
            <div class="mb-3">
              <label for="nombre_producto" class="form-label">Nombre Producto:</label>
              <input type="text" name="nombre_producto" class="form-control" id="nombre_producto">
            </div>
            <div class="mb-3">
              <label for="stock" class="form-label">Stock:</label>
              <input type="number" name="stock" class="form-control" id="stock">
            </div>
            <div class="mb-3">
              <label for="precio" class="form-label">Precio: </label>
              <input type="number" step="any" name="precio_compra" class="form-control" id="precio">
            </div>
              <button type="submit" class="btn btn-primary">Agregar</button>
              <a href="agregarProductos.php" class="btn btn-warning">Cancelar</a>
            </form>
        </div>
      </div>
    </div>


<?php
    require_once("../head/footer.php")
?>