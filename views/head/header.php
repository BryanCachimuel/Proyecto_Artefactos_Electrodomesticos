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
                                Información Varial
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/proyecto_artefactos/views/home/agregarInformacion.php">Agregar Información</a></li>
                                <li><a class="dropdown-item" href="/proyecto_artefactos/views/home/agregarmarcas.php">Agregar Marcas</a></li>
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

<?php if(empty($_SESSION['usuario'])) : ?>
    <header class="hero">
        <nav class="nav container"></nav>

        <section class="hero__container container">
            <h1 class="hero__title">Almacen de Electrodomesticos</h1>
            <p class="hero__paragraph">El almacen a su disposición con todos los Electrodomesticos que ustedes desee cotizar y 
                a los mejores precios del mercado
            </p>
               
            <a href="/proyecto_artefactos/views/home/iniciar_sesion.php" class="cta">Iniciar Sesión</a>
        </section>
    </header>

    <main>
        <section class="container about">
            <h2 class="subtitle">¿Qué aprenderás en encontraras en nuestro almacen?</h2>
            <p class="about__paragraph">Todo lo necesario para que tu lo puedas comprar y llenar tu casa con los Electrodomesticos
                que siempre as soñado
            </p>

            <div class="about__main">
                <article class="about__icons">
                    <img src="./images/shapes.svg" class="about__icon">
                    <h3 class="about__title">CSS Layouts</h3>
                    <p class="about__paragrah">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae tempore
                        porro eius facilis?</p>
                </article>

                <article class="about__icons">
                    <img src="./images/paint.svg" class="about__icon">
                    <h3 class="about__title">Animaciones</h3>
                    <p class="about__paragrah">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae tempore
                        porro eius facilis?</p>
                </article>

                <article class="about__icons">
                    <img src="./images/code.svg" class="about__icon">
                    <h3 class="about__title">Sass</h3>
                    <p class="about__paragrah">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae tempore
                        porro eius facilis?</p>
                </article>
            </div>
        </section>

    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 class="footer__title">Almacen de Electrodomesticos.</h2>
            </nav>

            <form class="footer__form" action="https://formspree.io/f/mknkkrkj" method="POST">
                <h2 class="footer__newsletter">Suscribete a la newsletter</h2>
                <div class="footer__inputs">
                    <input type="email" placeholder="Email:" class="footer__input" name="_replyto">
                    <input type="submit" value="Registrate" class="footer__submit">
                </div>
            </form>
        </section>

        <section class="footer__copy container">
            <div class="footer__social">
                <a href="#" class="footer__icons"><img src="./images/facebook.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./images/twitter.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./images/youtube.svg" class="footer__img"></a>
            </div>

            <h3 class="footer__copyright">Derechos reservados &copy; Jordan Alexander</h3>
        </section>
    </footer>

    <script src="./js/slider.js"></script>
    <script src="./js/questions.js"></script>
    <script src="./js/menu.js"></script>
<?php else: ?>

<?php endif ?>


