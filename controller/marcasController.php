<?php
    class MarcasController{
        private $model;

        public function __construct(){
            require_once("c://xampp/htdocs/proyecto_artefactos/model/marcasModel.php");
            $this->model = new MarcasModel();
        }

        public function guardarMarca($marcas, $pais, $nombre_proveedor, $contacto_proveedor){
            $id = $this->model->crearMarca($marcas, $pais, $nombre_proveedor, $contacto_proveedor);
            return ($id != false) ? header("Location:/proyecto_artefactos/views/home/agregarmarcas.php?id=".$id) : header("Location:/proyecto_artefactos/views/home/agregarmarcas.php");
        }

        public function verListaMarcas(){
            if($this->model->listarMarcas()){
                return $this->model->listarMarcas();
            }else{
                return false;
            }
        }

        public function verMarcasporId($id){
            return ($this->model->verMarcas($id) != false) ? $this->model->verMarcas($id) : header("Location:/proyecto_artefactos/views/home/agregarmarcas.php");
        }
    }
?>