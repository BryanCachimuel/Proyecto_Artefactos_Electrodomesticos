<?php
    require_once("../head/header.php");
    if(empty($_SESSION['usuario'])){
        header("Location:iniciar_sesion.php");
    }
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-5">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Agregar Marcas
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="/proyecto_artefactos/helpers/marcas/marcasformulario.php" method="POST">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="marcas" placeholder="Samsung">
                                <label for="marcas">Nombre de la Marca</label>
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
        <div class="col-7">
            <div class="card mb-4">
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>



<?php
    require_once("../head/footer.php")
?>