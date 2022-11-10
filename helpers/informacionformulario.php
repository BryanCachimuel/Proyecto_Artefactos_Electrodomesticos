<?php
    require_once("c://xampp/htdocs/proyecto_artefactos/controller/informacionController.php");
    $obj = new InformacionController();
    $contenido = $_POST['contenido'];
    $descripcion = $_POST['descripcion'];
    $direccion = $_POST['direccion'];
    $contacto = $_POST['contacto'];
    $contacto2 = $_POST['contacto2'];

    $obj->guardarInformacion($contenido, $descripcion, $direccion, $contacto, $contacto2);
    
?>