<?php
     require_once("../head/header.php");
     if(empty($_SESSION['usuario'])){
         header("Location:iniciar_sesion.php");
     }
     require_once("c://xampp/htdocs/proyecto_artefactos/controller/productoController.php");
     $obj = new ProductoController();
     $productos = $obj->verlistaProductos();
?>

<div class="container mt-5">
  <div class="row">
    <div class="col-2">
    
      <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#agregarProductos">
        Agregar Producto
      </button>

      <!-- Modal -->
      <div class="modal fade" id="agregarProductos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-info">
              <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Agregar Producto</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <div class="modal-body">
                <form action="/proyecto_artefactos/helpers/productosformulario.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="nombre_producto" class="form-label">Nombre Producto:</label>
                  <input type="text" name="nombre_producto" class="form-control" id="nombre_producto">
                </div>
                <div class="mb-3">
                  <label for="descripcion" class="form-label">Descripción Producto:</label>
                  <textarea class="form-control" name="descripcion"  id="descripcion" rows="2"></textarea>
                </div>
                <div class="form-group row">
                  <label for="stock" class="col-sm-2 col-form-label">Stock:</label>
                  <div class="col-sm-4">
                    <input type="number" name="stock" class="form-control" id="stock">
                  </div>
                  <label for="precio_compra" class="col-sm-2 col-form-label">Precio: </label>
                  <div class="col-sm-4">
                    <input type="number" step="any" name="precio_compra" class="form-control" id="precio_compra">
                  </div>
                </div>
                <br>
                <div class="mb-3">
                  <label for="imagen_producto" class="form-label">Imagen Producto:</label>
                  <input type="file" class="form-control" accept="image/*" name="imagen_producto" id="imagen_producto" require="">
                </div>
              </div>
              <div class="modal-footer"> 
                <button type="submit" class="btn btn-primary">Agregar</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="col-10">
      <table class="table text-center">
        <thead class="bg-info">
          <tr class="text-dark">
            <th scope="col">Imagen</th>
            <th scope="col">Nombre</th>
            <th scope="col">Stock</th>
            <th scope="col">Precio Compra</th>
            <th scope="col">Valor Total Compra</th>
            <th scope="col">Precio Venta</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
          <?php foreach($productos as $prod) : ?>
            <tbody class="bg-dark text-white">
              <th><img class="img-thumbnail" width="100px" src="/proyecto_artefactos//asset/image/<?php echo $prod['imagen_producto'];?>" /></th>
              <th><?= $prod[1] ?></th>
              <th><?= $prod[3] ?></th>
              <th>$<?= $prod[4] ?></th>
              <th>$<?= $prod[5] ?></th>
              <th>$<?= $prod[6] ?></th> 
              <th><a href="editarProducto.php?id=<?= $prod[0] ?>" class="btn btn-outline-info"><i class="fa fa-edit"></i></a></th> 
              <th><a href="" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#idproducto<?=$prod[0]?>"><i class="fa fa-trash"></i></a></th>    
            </tbody>

            <!-- Modal -->
            <div class="modal fade" id="idproducto<?=$prod[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar este registro?</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <h3><strong><?=$prod[1]?><strong></h3>
                    </div>
                    <div class="modal-footer">
                      <a href="/proyecto_artefactos/helpers/productos/eliminarProductos.php?id=<?= $prod[0]?>" class="btn btn-danger">Eliminar</a>
                      <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                  </div>                         
                </div>
            </div>


          <?php endforeach; ?>
      </table>
    </div> 
  </div>
</div>

<?php
    require_once("../head/footer.php")
?>