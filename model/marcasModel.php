<?php

    class MarcasModel{
        private $PDO;

        public function __construct(){
            require_once("c://xampp/htdocs/proyecto_artefactos/config/db.php");
            $pdo = new db();
            $this->PDO = $pdo->conexion();
        }

        public function crearMarca($marcas){
            $statement = $this->PDO->prepare("INSERT INTO marca VALUES(null, :marcas)");
            $statement->bindParam(":marcas", $marcas);
            return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
        }
    }

?>