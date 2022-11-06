<?php
    require_once("../head/head.php")
?>

<div class="fondo-login">
    <div class="icono">
        <a href="/proyecto_artefactos/index.php"><i class="fa-solid fa-store store-icono"></i></a>
    </div>
    <div class="titulo">
        Inicia Sesión   
    </div>
      <form action="verificar.php" method="POST" class="col-3 login" autocomplete="off">
        <div class="mb-3">
            <label for="correo" class="form-label">Correo Electrónico: </label>
            <input type="email" name="correo" class="form-control" id="correo" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña: </label>
            <div class="box-eye">
                <button type="button" onclick="mostrarContrasenia('password','eyepassword')">
                    <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="d-grid gap-2">
           <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </div>
    </form>
    <div class="login col-3 mt-3">
        Nuevo en Artefctos? <a href="registrar.php" class="crear_cuenta">Create una Cuenta</a>
    </div>
</div>

<?php
    require_once("../head/footer.php")
?>