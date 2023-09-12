<?php
    require_once("c://xampp/htdocs/proyecto_artefactos/controller/usuariosController.php");
    $obj = new UsuariosController();
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $obj->actualizarRegistroUsuario($id, $nombre, $correo);
?>