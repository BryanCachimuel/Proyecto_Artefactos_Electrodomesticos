<?php
    class MarcasController{
        private $model;

        public function __construct(){
            require_once("c://xampp/htdocs/proyecto_artefactos/model/marcasModel.php");
            $this->model = new MarcasModel();
        }

        public function guardarMarca($marcas){
            $id = $this->model->crearMarca($marcas);
            return ($id != false) ? header("Location:/proyecto_artefactos/views/home/agregarmarcas.php?id=".$id) : header("Location:/proyecto_artefactos/views/home/agregarmarcas.php");
        }
    }
?>