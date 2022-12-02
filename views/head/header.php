<?php
    require_once("c://xampp/htdocs/proyecto_artefactos/views/head/head.php");
?>

<div class="fondo_menu">
 <div class="container-fluid">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <?php if(empty($_SESSION['usuario'])) : ?>
                <a class="navbar-brand" href="/proyecto_artefactos/index.php">Artefactos Electrodomesticos</a>
            <?php else: ?>
                <a class="navbar-brand" href="/proyecto_artefactos/views/home/panel_control.php">Artefactos Electrodomesticos</a>
            <?php endif ?>  
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <?php if(empty($_SESSION['usuario'])) : ?>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Información</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contactanos</a>
                        </li>
                    </ul>
                    <a href="/proyecto_artefactos/views/home/iniciar_sesion.php" class="boton">Iniciar Sesión</a>
                    <a href="/proyecto_artefactos/views/home/registrar.php" class="boton">Registrate</a>
                </div>
            <?php else: ?>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/proyecto_artefactos/views/home/agregarProductos.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listar.php">Lista de Usuarios</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Información
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/proyecto_artefactos/views/home/agregarInformacion.php">Agregar Información</a></li>
                            </ul>
                        </li>
                    </ul>
                    <strong class="text-white"><i class="fa-sharp fa-solid fa-user-tie"></i> <?= $_SESSION['usuario'] ?> </strong><a class="boton"  data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-right-from-bracket"></i></a>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body text-center">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">¿Está Seguro de que quiere Cerrar la Sesión? Usuario: <strong><?= $_SESSION['usuario'] ?></strong></h1>
                            </div>
                            <div class="modal-footer mx-auto">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                <a href="/proyecto_artefactos/views/home/logout.php" class="btn btn-success">Cerrar Sesión</a>
                            </div>
                        </div>
                    </div>
                </div>


            <?php endif ?>           
        </div>
    </nav>
 </div>
</div>

<!-- esta clase solo se va autilizar para agregar el código ya sea externo o el código que se va a estar visualizando en cada pestaña -->
<div class="fondo">


