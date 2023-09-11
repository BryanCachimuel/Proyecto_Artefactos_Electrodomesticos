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

        public function obtenerUsuarios(){
            $statement = $this->PDO->prepare("SELECT * FROM usuarios");
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

        public function usuarioporId($id){
            $statement = $this->PDO->prepare("SELECT * FROM usuarios WHERE id = :id LIMIT 1");
            $statement->bindParam(":id", $id);
            return ($statement->execute()) ? $statement->fetch() : false;
        }

        public function actualizarUsuario($id, $nombre, $correo){
            $statement = $this->PDO->prepare("UPDATE usuarios SET nombre = :nombre, correo = :correo WHERE id = :id");
            $statement->bindParam(":nombre", $nombre);
            $statement->bindParam(":correo", $correo);
            $statement->bindParam(":id", $id);
            return ($statement->execute()) ? $id : false;
        }
    }
?>