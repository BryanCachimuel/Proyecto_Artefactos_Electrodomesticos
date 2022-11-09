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
            try {
                $statement->execute();
                return true;
            } catch (PDOException $e) {
                return false;
            }
        }
    }
?>