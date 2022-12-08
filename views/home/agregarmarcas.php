<?php
    require_once("../head/header.php");
    if(empty($_SESSION['usuario'])){
        header("Location:iniciar_sesion.php");
    }

    require_once("c://xampp/htdocs/proyecto_artefactos/controller/marcasController.php");
    $obj = new MarcasController();
    $marcas = $obj->verListaMarcas();
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-3">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Agregar Marcas
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="/proyecto_artefactos/helpers/marcas/marcasformulario.php" method="POST" autocomplete="off">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="marcas" placeholder="Samsung">
                                <label for="marcas">Nombre de la Marca:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="pais" placeholder="Samsung">
                                <label for="pais">País:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="nombre_proveedor" placeholder="Samsung">
                                <label for="nombre_proveedor">Nombre Proveedor:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="contacto_proveedor" placeholder="Samsung">
                                <label for="contacto_proveedor">Contacto Proveedor:</label>
                            </div>
                            <div class="mx-auto">
                                <button type="submit" class="btn btn-primary">Agregar Marca</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
        <div class="col-1"></div>
        <div class="col-8">
            <?php foreach($marcas as $mc) :  ?>
                <div class="card mb-4">
                    <card-body>
                        <div class="container mt-2">
                        <div class="form-group row">
                            <label for="contenido" class="col-sm-2 col-form-label">Marca:</label>
                            <div class="col-sm-4"> 
                                <input type="text" name="marca" class="form-control" id="marca" value="<?= $mc[1] ?>" disabled>
                            </div>
                            <label for="direccion" class="col-sm-2 col-form-label">País: </label>
                            <div class="col-sm-4"> 
                                <input type="text" name="pais" class="form-control" id="pais"  value="<?= $mc[2] ?>" disabled>
                            </div>
                        </div>  
                            <div class="form-group row mt-3">
                            <label for="contacto" class="col-sm-2 col-form-label">Proveedor:</label>
                            <div class="col-sm-4">
                                <input type="text" name="nombre_proveedor" class="form-control" id="nombre_proveedor" value="<?= $mc[3] ?>" disabled>
                            </div>
                            <label for="contacto2" class="col-sm-2 col-form-label">Cont. Proveedor: </label>
                            <div class="col-sm-4">
                                <input type="text" name="contacto_proveedor" class="form-control" id="contacto_proveedor" value="<?= $mc[4] ?>" disabled>
                            </div>
                            </div>
                            <div class="mb-3 mt-3">
                                <a href="editarMarcas.php?id=<?= $info[0] ?>" class="btn btn-success">Actualizar</a>
                                <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#id<?=$mc[0]?>">Eliminar</a>
                            </div>
                        </div>
                    </card-body>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="id<?=$mc[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar esta Marca?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                        <h3><?=$mc[1]?></h3>
                        </div>
                        <div class="modal-footer">
                        <a href="/proyecto_artefactos/helpers/eliminarMarcas.php?id=<?= $mc[0]?>" class="btn btn-danger">Eliminar</a>
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </div>                         
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</div>



<?php
    require_once("../head/footer.php")
?>