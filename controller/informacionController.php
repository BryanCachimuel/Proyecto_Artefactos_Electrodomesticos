<?php
    class InformacionController{
        private $model;

        public function __construct(){
            require_once("c://xampp/htdocs/proyecto_artefactos/model/informacionModel.php");
            $this->model = new InformacionModel();
        }

        public function guardarInformacion($contenido, $describir, $direccion, $contacto, $contacto2){
            $valorInformacion = $this->model->agregarInformacion($contenido, $describir, $direccion, $contacto, $contacto2);
            return $valorInformacion;
        }
    }
?>