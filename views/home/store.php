<?php
    require_once("c://xampp/htdocs/proyecto_artefactos/controller/usuariosController.php");
    $obj = new UsuariosController();
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $confirmarPassword = $_POST['confirmarPassword'];

    /* 
    variable error para hacer comprobaciones dentro de los campos del formulario 
    empty -> verifica si los campos estan vacios
    */
    $error = "";
    if(empty($nombre) || empty($correo) || empty($password) || empty($confirmarPassword)){
        $error .= "<li>Completa los Campos</li>";
        header("Location:registrar.php?error=".$error."&&nombre=".$nombre."&&correo=".$correo."&&password=".$password."&&confirmarPassword=".$confirmarPassword);
    }else if($nombre && $correo && $password && $confirmarPassword){
        if($password == $confirmarPassword){
            if($obj->guardarUsuario($nombre, $correo, $password) == false){
                $error .= "<li>El correo ya esta registrado</li>";
                header("Location:registrar.php?error=".$error."&&nombre=".$nombre."&&correo=".$correo."&&password=".$password."&&confirmarPassword=".$confirmarPassword);
            }else{
                header("Location:iniciar_sesion.php");
            }
        }else{
            $error .= "<li>Las contraseñas son diferentes</li>";
            header("Location:registrar.php?error=".$error."&&nombre=".$nombre."&&correo=".$correo."&&password=".$password."&&confirmarPassword=".$confirmarPassword);
        }
    }
?>
