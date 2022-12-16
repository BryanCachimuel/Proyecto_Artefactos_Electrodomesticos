<?php
    class ProductoController{
        private $model;

        public function __construct(){
            require_once("c://xampp/htdocs/proyecto_artefactos/model/productosModel.php");
            $this->model = new ProductosModel();
        }
        // si no funciona quitar el parámetro $imagen_producto en los dos métodos
        public function guardarProductos($nombre_producto, $descripcion, $stock, $precio_compra, $imagen_producto){
            $id = $this->model->crearProducto($nombre_producto, $descripcion, $stock, $precio_compra, $imagen_producto);
            return ($id != false) ? header("Location:/proyecto_artefactos/views/home/agregarProductos.php?id=".$id) : header("Location:/proyecto_artefactos/views/home/agregarProductos.php");
        }

        public function verlistaProductos(){
            return ($this->model->listarProductos()) ? $this->model->listarProductos() : false;
        }

        public function ProductoporId($id){
            return ($this->model->verProductoporId($id) != false) ? $this->model->verProductoporId($id) : header("Location:/proyecto_artefactos/views/home/agregarProductos.php");
        }

        public function actualizarRegistroProducto($id, $nombre_producto, $descripcion, $stock, $precio_compra){
            return ($this->model->actualizarProducto($id, $nombre_producto, $descripcion, $stock, $precio_compra) != false) ? header("Location:/proyecto_artefactos/views/home/agregarProductos.php?id=".$id) : header("Location:/proyecto_artefactos/views/home/agregarProductos.php");
        }

        public function eliminarProducto($id){
            return ($this->model->eliminar($id)) ? header("Location:/proyecto_artefactos/views/home/agregarProductos.php") : header("Location:/proyecto_artefactos/views/home/agregarProductos.php?id=".$id);
        }
    }
?>