<?php

class Conexion {
    public function getConexion(){
        try {
            $host = "localhost";
            $db = "prueba-crud2";
            $user = "root";
            $password = "";
            $db = new PDO("mysql:host=$host;dbname=$db;",$user, $password);
            return $db;
        }catch(PDOException $e){
            echo "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}

?>