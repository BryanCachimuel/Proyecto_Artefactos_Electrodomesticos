<?php
    class UsuariosModel{
        private $PDO;

        public function __construct(){
            require_once("c://xampp/htdocs/proyecto_artefactos/config/db.php");
            $pdo = new db();
            $this->PDO = $pdo->conexion();
        }

        public function agregarNuevoUsuario($nombre, $correo, $password){
            $statement = $this->PDO->prepare("INSERT INTO usarios values(null,:nombre,:correo,:password)");
            $statement->bindParam(":nombre",$nombre);
            $stament->bindParam(":correo",$correo);
            $stament->bindParam(":password",$password);
            return ($stament->execute()) ? true : false;
        }
    }
?>