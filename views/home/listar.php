<?php
    require_once("../head/header.php");
    if(empty($_SESSION['usuario'])){
        header("Location:iniciar_sesion.php");
    }
    require_once("c://xampp/htdocs/proyecto_artefactos/controller/usuariosController.php");
    $obj = new UsuariosController();
    $users = $obj->listarUsuarios();
?>

    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto mt-5">
                <h3 class="text-center mb-3">Lista de Usuarios Registrados</h3>
                 <table class="table text-center">
                    <thead class="bg-primary">
                        <tr class="text-white">
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Correo</th>
                        </tr>
                    </thead>
                    <tbody class="bg-secondary">
                        <?php foreach($users as $us): ?>
                            <th><?= $us[0] ?></th>
                            <th><?= $us[1] ?></th>
                            <th><?= $us[2] ?></th>
                         <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
<?php
    require_once("../head/footer.php")
?>