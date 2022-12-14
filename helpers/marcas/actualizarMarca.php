<?php
    require_once("c://xampp/htdocs/proyecto_artefactos/controller/marcasController.php");
    $obj = new MarcasController();
    $id = $_POST['id'];
    $marcas = $_POST['marcas'];
    $pais = $_POST['pais'];
    $nombre_proveedor = $_POST['nombre_proveedor'];
    $contacto_proveedor = $_POST['contacto_proveedor'];

    $obj->actualizarRegistroMarca($id, $marcas, $pais, $nombre_proveedor, $contacto_proveedor);
?>