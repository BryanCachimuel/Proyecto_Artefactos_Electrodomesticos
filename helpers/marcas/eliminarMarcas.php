<?php
    require_once("c://xampp/htdocs/proyecto_artefactos/controller/marcasController.php");
    $obj = new MarcasController();
    $obj->eliminarMarcas($_GET['id']);
?>