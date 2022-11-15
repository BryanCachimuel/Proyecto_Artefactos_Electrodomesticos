<?php
    class InformacionModel{
        private $PDO;

        public function __construct(){
            require_once("c://xampp/htdocs/proyecto_artefactos/config/db.php");
            $pdo = new db();
            $this->PDO = $pdo->conexion();
        }

        public function agregarInformacion($contenido, $describir, $direccion, $contacto, $contacto2){
            $statement = $this->PDO->prepare("INSERT INTO informacion values(null,:contenido,:describir,:direccion,:contacto,:contacto2)");
            $statement->bindParam(":contenido",$contenido);
            $statement->bindParam(":describir",$describir);
            $statement->bindParam(":direccion",$direccion);
            $statement->bindParam(":contacto",$contacto);
            $statement->bindParam(":contacto2",$contacto2);
            return ($statement->execute()) ? $this->PDO->lastInsertId() : false;  /* lastInsertId() -> retorna el ultimo id ingresado */
        }

        public function listarInformacion(){
            $statement = $this->PDO->prepare("SELECT * FROM informacion");
            return ($statement->execute()) ? $statement->fetchAll() : false;
         }

         public function verInformacion($id){
            $statement = $this->PDO->prepare("SELECT * FROM informacion WHERE id = :id LIMIT 1");
            $statement->bindParam(":id",$id);
            return ($statement->execute()) ? $statement->fetch() : false;
         }
    }
?>