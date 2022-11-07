<?php
    class UsuariosModel{
        private $PDO;

        public function __construct(){
            require_once("c://xampp/htdocs/proyecto_artefactos/config/db.php");
            $pdo = new db();
            $this->PDO = $pdo->conexion();
        }

        public function agregarNuevoUsuario($nombre, $correo, $password){
            $statement = $this->PDO->prepare("INSERT INTO usuarios values(null,:nombre,:correo,:password)");
            $statement->bindParam(":nombre",$nombre);
            $statement->bindParam(":correo",$correo);
            $statement->bindParam(":password",$password);
            try {
                $statement->execute();
                return true;
            } catch (PDOException $e) {
                return false;
            }
        }
    }
?>