<?php

    class MarcasModel{
        private $PDO;

        public function __construct(){
            require_once("c://xampp/htdocs/proyecto_artefactos/config/db.php");
            $pdo = new db();
            $this->PDO = $pdo->conexion();
        }

        public function crearMarca($marcas, $pais, $nombre_proveedor, $contacto_proveedor){
            $statement = $this->PDO->prepare("INSERT INTO marca VALUES(null, :marcas, :pais, :nombre_proveedor, :contacto_proveedor)");
            $statement->bindParam(":marcas", $marcas);
            $statement->bindParam(":pais", $pais);
            $statement->bindParam(":nombre_proveedor", $nombre_proveedor);
            $statement->bindParam(":contacto_proveedor", $contacto_proveedor);
            return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
        }

        public function listarMarcas(){
            $statement = $this->PDO->prepare("SELECT * FROM marca");
            if($statement->execute()){
                return $statement->fetchAll();
            }else{
                return false;
            }
        }

        public function verMarcas($id){
            $statement = $this->PDO->prepare("SELECT * FROM marca WHERE id = :id LIMIT 1");
            $statement->bindParam(":id",$id);
            return ($statement->execute()) ? $statement->fetch() : false;
        }

        public function actualizarMarca($id, $marcas, $pais, $nombre_proveedor, $contacto_proveedor){
            $statement = $this->PDO->prepare("UPDATE marca SET marcas = :marcas, pais = :pais, nombre_proveedor = :nombre_proveedor, contacto_proveedor = :contacto_proveedor WHERE id = :id");
            $statement->bindParam(":marcas",$marcas);
            $statement->bindParam(":pais",$pais);
            $statement->bindParam(":nombre_proveedor",$nombre_proveedor);
            $statement->bindParam(":contacto_proveedor",$contacto_proveedor);
            $statement->bindParam(":id",$id);
            return ($statement->execute()) ? $id : false;
        }

        public function eliminar($id){
            $statement = $this->PDO->prepare("DELETE FROM marca WHERE id = :id");
            $statement->bindParam(":id", $id);
            return ($statement->execute()) ? true : false;
        }
    }

?>