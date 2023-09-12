<?php
require_once("../head/header.php");
if (empty($_SESSION['usuario'])) {
    header("Location:iniciar_sesion.php");
}
require_once("c://xampp/htdocs/proyecto_artefactos/controller/usuariosController.php");
$obj = new UsuariosController();
$users = $obj->listarUsuarios();
?>

<div class="container">
    <div class="row">
        <div class="col-6 mx-auto mt-5">
            <h3 class="text-center mb-3"><i class="fa-solid fa-id-card-clip"></i> Lista de Usuarios Registrados</h3>
            <table class="table text-center" id="usuarios">
                <thead class="bg-primary">
                    <tr class="text-white">
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <?php foreach ($users as $us) : ?>
                    <tbody class="text-white bg-dark">
                        <th><?= $us[0] ?></th>
                        <th><?= $us[1] ?></th>
                        <th><?= $us[2] ?></th>
                        <th><a href="editarUsuario.php?id=<?= $us[0] ?>" class="btn btn-outline-primary"><i class="fa fa-edit"></i></a></th>
                        <th><a href="" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#idusuario<?= $us[0] ?>"><i class="fa fa-trash"></i></a></th>
                    </tbody>

                    <!-- Modal -->
                    <div class="modal fade" id="idusuario<?= $us[0] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar este registro?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <h3><strong><?= $us[1] ?><strong></h3>
                                </div>
                                <div class="modal-footer">
                                    <a href="/proyecto_artefactos/helpers/usuarios/eliminarUsuarios.php?id=<?= $us[0] ?>" class="btn btn-danger">Eliminar</a>
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>


<?php
require_once("../head/footer.php")
?>