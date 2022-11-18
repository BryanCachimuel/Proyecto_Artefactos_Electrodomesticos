<?php
    require_once("../head/header.php");
    if(empty($_SESSION['usuario'])){
        header("Location:iniciar_sesion.php");
    }
    require_once("c://xampp/htdocs/proyecto_artefactos/controller/productoController.php");
    $obj = new ProductoController();
    $productos = $obj->verlistaProductos();
?>

    <h4 class="text-center mt-4"><i class="fa-sharp fa-solid fa-user-tie"></i> Bienvenido <?= $_SESSION['usuario'] ?></h4>
    <div class="container mt-3">
        <div class="row">
            <?php foreach($productos as $prod) : ?>
                <div class="col-4">
                    <div class="card mb-3">
                        <div id="titulo_tarjeta" class="card-header bg-primary text-white">
                            Producto: <?= $prod[1]?>
                        </div>
                        <div class="card-body">
                            <p class="parrafo"><strong>Descripción:</strong> <?= $prod[2]?></p>
                            <p class="parrafo"><strong>Stock:</strong> <?= $prod[3]?></p>
                            <p class="parrafo"><strong>Precio de Venta:</strong> $<?=$prod[6]?></p> 
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

<?php
    require_once("../head/footer.php")
?>