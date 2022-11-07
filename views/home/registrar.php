<?php
    require_once("../head/head.php")
?>

<div class="fondo-login">
    <div class="icono">
        <a href="/proyecto_artefactos/index.php"><i class="fa-solid fa-store store-icono"></i></a>
    </div>
    <div class="titulo">
       Crear una Cuenta
    </div>
      <form action="store.php" method="POST" class="col-3 login" autocomplete="off">
      <div class="mb-3">
            <label for="nombre" class="form-label">Nombre Completo: </label>
            <input type="text" name="nombre" value="<?= (!empty($_GET['nombre'])) ? $_GET['nombre'] : "" ?>" class="form-control" id="nombre">
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo Electrónico: </label>
            <input type="email" name="correo" value="<?= (!empty($_GET['correo'])) ? $_GET['correo'] : "" ?>" class="form-control" id="correo" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña: </label>
            <div class="box-eye">
                <button type="button" onclick="mostrarContrasenia('password','eyepassword')">
                    <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="password" value="<?= (!empty($_GET['password'])) ? $_GET['password'] : "" ?>" class="form-control" id="password">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Repite la Contraseña: </label>
            <div class="box-eye">
                <button type="button" onclick="mostrarContrasenia('password2','eyepassword2')">
                    <i id="eyepassword2" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="confirmarPassword" value="<?= (!empty($_GET['confirmarPassword'])) ? $_GET['confirmarPassword'] : "" ?>" class="form-control" id="password2">
        </div>
        <?php if(!empty($_GET['error'])): ?>
            <div id="alertError" class="alert alert-danger mb-2" role="alert">
                <?= !empty($_GET['error']) ? $_GET['error'] : "" ?>
            </div>
        <?php endif; ?>
        <div class="d-grid gap-2">
           <button type="submit" class="btn btn-primary">Crear Cuenta</button>
        </div>
    </form>
    <div class="login col-3 mt-3">
        Tienes una Cuenta? <a href="iniciar_sesion.php" class="crear_cuenta">Iniciar Sesión</a>
    </div>
</div>

<?php
    require_once("../head/footer.php")
?>