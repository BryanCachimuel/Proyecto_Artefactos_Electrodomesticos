<?php
    require_once("c://xampp/htdocs/proyecto_artefactos/controller/informacionController.php");
    $obj = new InformacionController();
    $obj->eliminarInformacion($_GET['id']);
?>