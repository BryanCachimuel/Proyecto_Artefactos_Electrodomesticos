<?php
    require_once("c://xampp/htdocs/proyecto_artefactos/controller/usuariosController.php");
    $obj = new UsuariosController();
    $obj->eliminarRegistroUsuario($_GET['id']);
?>