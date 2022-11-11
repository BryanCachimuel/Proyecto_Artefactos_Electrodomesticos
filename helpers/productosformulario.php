<?php
    require_once("c://xampp/htdocs/proyecto_artefactos/controller/productoController.php");
    $obj = new ProductoController();
    $nombre_producto = $_POST['nombre_producto'];
    $stock = $_POST['stock'];
    $precio = $_POST['precio'];
    $cantidad =  $_POST['cantidad'];

    $obj->guardarProductos($nombre_producto, $stock, $precio, $cantidad);
?>