<?php
    class ProductoController{
        private $model;

        public function __construct(){
            require_once("c://xampp/htdocs/proyecto_artefactos/model/productosModel.php");
            $this->model = new ProductosModel();
        }

        public function guardarProductos($nombre_producto, $stock, $precio, $cantidad){
            $id = $this->model->crearProducto($nombre_producto, $stock, $precio, $cantidad);
            return ($id != false) ? header("Location:/proyecto_artefactos/views/home/agregarProductos.php?id=".$id) : header("Location:/proyecto_artefactos/views/home/agregarProductos.php");
        }
    }
?>