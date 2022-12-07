<?php
    require_once("c://xampp/htdocs/proyecto_artefactos/controller/marcasController.php");
    $obj = new MarcasController();
    $marcas = $_POST['marcas'];

    $obj->guardarMarca($marcas);
?>