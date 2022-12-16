<?php
    require_once("../head/header.php");
    if(empty($_SESSION['usuario'])){
        header("Location:iniciar_sesion.php");
    }
    require_once("c://xampp/htdocs/proyecto_artefactos/controller/productoController.php");
    $obj = new ProductoController();
    $producto = $obj->ProductoporId($_GET['id']);
?>

<div class="container mt-3 mx-auto col-4">
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="text-white">Editar Producto</h3>
        </div>
        <div class="card-body">
            <form action="/proyecto_artefactos/helpers/productos/actualizarProductos.php" method="POST" autocomplete="off" enctype="multipart/form-data">
                <div>
                    <input type="hidden" name="id" class="form-control" id="id" value="<?= $producto['id'] ?>">
                </div>
                <div class="mb-3">
                    <label for="nombre_producto" class="form-label">Nombre Producto:</label>
                    <input type="text" name="nombre_producto" class="form-control" id="nombre_producto" value="<?= $producto['nombre_producto'] ?>">
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción:</label>
                    <textarea class="form-control" name="descripcion"  id="descripcion" rows="2"><?= $producto['descripcion'] ?></textarea>
                </div>
                <div class="form-group row">
                  <label for="stock" class="col-sm-2 col-form-label">Stock:</label>
                  <div class="col-sm-4">
                    <input type="number" name="stock" class="form-control" id="stock" value="<?= $producto['stock'] ?>">
                  </div>
                  <label for="precio_compra" class="col-sm-2 col-form-label">Precio: </label>
                  <div class="col-sm-4">
                    <input type="number" name="precio_compra" class="form-control" id="precio_compra"  value="<?= $producto['precio_compra'] ?>">
                  </div>
                </div>
                <div class="mb-3 mt-4">
                    <button type="submit" class="btn btn-primary">Actualizar Producto</button>
                    <a href="agregarProductos.php" class="btn btn-warning">Cancelar</a>
                </div>
            </form>
        </div>
    </div>  
</div>


<?php
    require_once("../head/footer.php")
?>