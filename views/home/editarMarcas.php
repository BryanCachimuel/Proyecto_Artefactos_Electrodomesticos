<?php
    require_once("../head/header.php");
    if(empty($_SESSION['usuario'])){
        header("Location:iniciar_sesion.php");
    }
    require_once("c://xampp/htdocs/proyecto_artefactos/controller/marcasController.php");
    $obj = new MarcasController();
    $informacion = $obj->verMarcasporId($_GET['id']);
?>



<?php
    require_once("../head/footer.php")
?>