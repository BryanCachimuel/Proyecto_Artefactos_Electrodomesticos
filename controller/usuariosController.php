<?php 
    class UsuariosController{
        private $model;
        public function __construct(){
            require_once("c://xampp/htdocs/proyecto_artefactos/model/usuariosModel.php");
            $this->model = new UsuariosModel();
        }

        public function guardarUsuario($nombre, $correo, $password){
            $valor = $this->model->agregarNuevoUsuario($this->limpiarNombre($nombre),$this->limpiarCorreo($correo),$this->encriptarContrasenia($this->limpiarPassword($password)));
            return $valor;
        }

        public function limpiarNombre($campo){
            $campo = strip_tags($campo);
            $campo = filter_var($campo, FILTER_UNSAFE_RAW);
            $campo = htmlspecialchars($campo);
            return $campo;
        }

        public function limpiarPassword($campo){
            $campo = strip_tags($campo);
            $campo = filter_var($campo, FILTER_UNSAFE_RAW);
            $campo = htmlspecialchars($campo);
            return $campo;
        }

        public function limpiarCorreo($campo){
            $campo = strip_tags($campo);
            $campo = filter_var($campo, FILTER_SANITIZE_EMAIL);
            $campo = htmlspecialchars($campo);
            return $campo;
        }

        public function encriptarContrasenia($contrasenia){
            return password_hash($contrasenia, PASSWORD_DEFAULT);
        }

        public function verificarUsuario($correo, $password){
            $keydb = $this->model->obtenerClave($correo);
            return (password_verify($password,$keydb)) ? true : false;
        }
    }
?>