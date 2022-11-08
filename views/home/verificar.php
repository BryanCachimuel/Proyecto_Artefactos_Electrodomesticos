 <?php
    require_once("c://xampp/htdocs/proyecto_artefactos/controller/usuariosController.php");
    
    /* siempre que se trabaja con sesiones se debe poner session_start() */
    session_start();
    
    $obj = new UsuariosController();
    $correo = $obj->limpiarCorreo($_POST['correo']);
    $password = $obj->limpiarPassword($_POST['password']);
    $controlcorreo = $obj->verificarUsuario($correo,$password);
    if($controlcorreo){
        $_SESSION['usuario'] = $correo;
        header("Location:panel_control.php");
    }else{
        $error = "<li>Las credenciales de Ingreso son Incorrecta</li>";
        header("Location:iniciar_sesion.php?error=".$error);
    }
 
 ?>