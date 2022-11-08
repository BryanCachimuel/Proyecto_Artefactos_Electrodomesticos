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

        /* función encargada de obtener la contraseña de un usuario de la bdd */
        public function obtenerClave($correo){
            $statement = $this->PDO->prepare("SELECT password FROM usuarios WHERE correo = :correo");
            $statement->bindParam(":correo", $correo);
            return ($statement->execute()) ? $statement->fetch()['password'] : false;
        }
    }
?>