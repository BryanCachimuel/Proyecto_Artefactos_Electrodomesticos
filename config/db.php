<?php
    class db{
        private $host="localhost"; 
        private $dbname="artefactos"; 
        private $user="root"; 
        private $password="";
        
        public function conexion(){
            try {
                $pdo = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
                return $pdo;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
    }

    /* como prueba de conexión hacia la base de datos 
       creamos un objeto para utilizar la función creada
    
       $obj = new db();
        print_r($obj->conexion());

     */
?>