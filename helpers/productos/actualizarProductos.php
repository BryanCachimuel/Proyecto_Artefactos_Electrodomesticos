<?php
    require_once("c://xampp/htdocs/proyecto_artefactos/controller/productoController.php");
    $obj = new ProductoController();
    $id = $_POST['id'];
    $nombre_producto = $_POST['nombre_producto'];
    $descripcion = $_POST['descripcion'];
    $stock = $_POST['stock'];
    $precio_compra = $_POST['precio_compra'];
    $imagen_producto = $_POST['imagen_producto'];

    $fecha=new DateTime();
    $nombreFoto = $fecha->getTimestamp()."_".$nombre_producto.".png";
    $tmpFoto = $_FILES["imagen_producto"]["tmp_name"];
    if($tmpFoto!=""){
        move_uploaded_file($tmpFoto,"/proyecto_artefactos/asset/image/".$nombreFoto);
    }

    $obj->actualizarRegistroProducto($id, $nombre_producto, $descripcion, $stock, $precio_compra, $nombreFoto);
?>