<?php
    require_once("c://xampp/htdocs/proyecto_artefactos/controller/productoController.php");
    $obj = new ProductoController();
    $id = $_POST['id'];
    $nombre_producto = $_POST['nombre_producto'];
    $descripcion = $_POST['descripcion'];
    $stock = $_POST['stock'];
    $precio_compra = $_POST['precio_compra'];

    $obj->actualizarRegistroProducto($id, $nombre_producto, $descripcion, $stock, $precio_compra);
?>