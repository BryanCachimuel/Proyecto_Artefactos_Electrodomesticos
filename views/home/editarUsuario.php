<?php 
    require_once("../head/header.php");
    if(empty($_SESSION['usuario'])){
        header("Location:iniciar_sesion.php");
    }
    require_once("c://xampp/htdocs/proyecto_artefactos/controller/usuariosController.php");
    $obj = new UsuariosController();
    $usuario = $obj->usuarioporId($_GET['id']);
?>

<div class="container mt-3 mx-auto col-4">
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="text-white">Editar Información de Usuarios</h3>
        </div>
        <div class="card-body">
            <form action="/proyecto_artefactos/helpers/usuarios/actualizarUsuarios.php" method="POST" autocomplete="off" enctype="multipart/form-data">
                <div>
                    <input type="hidden" name="id" class="form-control" id="id" value="<?= $usuario['id'] ?>">
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" value="<?= $usuario['nombre'] ?>">
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo:</label>
                    <input type="text" name="correo" class="form-control" id="correo" value="<?= $usuario['correo'] ?>">
                </div>
                <div class="mb-3 mt-4">
                    <button type="submit" class="btn btn-primary">Actualizar Producto</button>
                    <a href="listar.php" class="btn btn-warning">Cancelar</a>
                </div>
            </form>
        </div>
    </div>  
</div>

<?php
    require_once("../head/footer.php")
?>