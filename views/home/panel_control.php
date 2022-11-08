<?php
    require_once("../head/header.php");
    if(empty($_SESSION['usuario'])){
        header("Location:iniciar_sesion.php");
    }
?>

    <h1 class="text-center mt-4">Bienvenido <?= $_SESSION['usuario'] ?></h1>

<?php
    require_once("../head/footer.php")
?>