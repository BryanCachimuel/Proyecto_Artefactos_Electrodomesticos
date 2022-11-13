<?php
    class ProductosModel{
        private $PDO;

        public function __construct(){
            require_once("c://xampp/htdocs/proyecto_artefactos/config/db.php");
            $pdo = new db();
            $this->PDO = $pdo->conexion();
        }

        public function crearProducto($nombre_producto, $descripcion, $stock, $precio_compra){
            $statement = $this->PDO->prepare("INSERT INTO productos values(null,:nombre_producto,:descripcion,:stock,:precio_compra,:valor_total_compra,:precio_venta)");
            $statement->bindParam(":nombre_producto",$nombre_producto);
            $statement->bindParam(":descripcion",$descripcion);
            $statement->bindParam(":stock",$stock);     
            $statement->bindParam(":precio_compra",$precio_compra);
            $valor_compra = ($stock * $precio_compra);
            $statement->bindParam(":valor_total_compra", $valor_compra); 
            $valor_venta = ((($precio_compra*25)/100)+$precio_compra);
            $statement->bindParam(":precio_venta",  $valor_venta);
            return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
        }

        public function listarProductos(){
            $statement = $this->PDO->prepare("SELECT * FROM productos");
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }
    }
?>