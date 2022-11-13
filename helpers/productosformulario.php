<?php
    require_once("c://xampp/htdocs/proyecto_artefactos/controller/productoController.php");
    $obj = new ProductoController();
    $nombre_producto = $_POST['nombre_producto'];
    $stock = $_POST['stock'];
    $precio_compra = $_POST['precio_compra'];

    $obj->guardarProductos($nombre_producto, $stock, $precio_compra);
?>