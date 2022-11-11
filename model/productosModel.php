<?php
    class ProductosModel{
        private $PDO;

        public function __construct(){
            require_once("c://xampp/htdocs/proyecto_artefactos/config/db.php");
            $pdo = new db();
            $this->PDO = $pdo->conexion();
        }

        public function crearProducto($nombre_producto, $stock, $precio, $cantidad){
            $statement = $this->PDO->prepare("INSERT INTO productos values(null,:nombre_producto,:stock,:precio,:cantidad,:valor_total)");
            $statement->bindParam(":nombre_producto",$nombre_producto);
            $statement->bindParam(":stock",$stock);
            $statement->bindParam(":precio",$precio);
            $statement->bindParam(":cantidad",$cantidad);
            $statement->bindParam(":valor_total", $precio * $cantidad);
            return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
        }
    }
?>