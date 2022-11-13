<?php
    class ProductoController{
        private $model;

        public function __construct(){
            require_once("c://xampp/htdocs/proyecto_artefactos/model/productosModel.php");
            $this->model = new ProductosModel();
        }

        public function guardarProductos($nombre_producto, $descripcion, $stock, $precio_compra){
            $id = $this->model->crearProducto($nombre_producto, $descripcion, $stock, $precio_compra);
            return ($id != false) ? header("Location:/proyecto_artefactos/views/home/agregarProductos.php?id=".$id) : header("Location:/proyecto_artefactos/views/home/agregarProductos.php");
        }

        public function verlistaProductos(){
            return ($this->model->listarProductos()) ? $this->model->listarProductos() : false;
        }
    }
?>