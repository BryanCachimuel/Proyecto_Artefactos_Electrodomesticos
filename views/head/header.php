<?php
    require_once("head.php");
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
                            <a class="nav-link active" aria-current="page" href="/proyecto_artefactos/views/home/panel_control.php">Productos Electricos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/proyecto_artefactos/views/home/agregarProductos.php">Productos</a>
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
                    <a href="/proyecto_artefactos/views/home/logout.php" class="boton">Cerrar Sesión</a>
                </div>
            <?php endif ?>  

        </div>
    </nav>

 </div>
</div>

<!-- esta clase solo se va autilizar para agregar el código ya sea externo o el código que se va a estar visualizando en cada pestaña -->
<div class="fondo">



