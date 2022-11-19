<?php
    require_once("c://xampp/htdocs/proyecto_artefactos/controller/productoController.php");
    $obj = new ProductoController();
    $obj->eliminarProducto($_GET['id']);
?>