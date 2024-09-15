<?php

class Controller{
    
    public function getUsuarios(){
        try{
            $list = array();
            $conexion= new Conexion();
            $db= $conexion->getConexion();
            $sql = "SELECT * FROM usuarios ORDER BY nombre";
            $query = $db->prepare($sql);
            $query->execute();
            while($row = $query->fetch()){
                $list[] = array(
                    "idUsuarios" => $row['idUsuarios'],
                    "nombre" => $row['nombre'],
                    "mail" => $row['mail'],
                    "clave" => $row['clave']
                );
            } //fin del ciclo while

            return $list;
        }catch(PDOException $e){
            echo "¡Error!: " . $e->getMessage() . "<br/>";
        }
    }
}