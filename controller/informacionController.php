<?php
    class InformacionController{
        private $model;

        public function __construct(){
            require_once("c://xampp/htdocs/proyecto_artefactos/model/informacionModel.php");
            $this->model = new InformacionModel();
        }

        public function guardarInformacion($contenido, $describir, $direccion, $contacto, $contacto2){
            $id = $this->model->agregarInformacion($contenido, $describir, $direccion, $contacto, $contacto2);
            return ($id != false) ? header("Location:/proyecto_artefactos/views/home/agregarInformacion.php?id=".$id) : header("Location:/proyecto_artefactos/views/home/agregarInformacion.php");
        }
    }
?> 