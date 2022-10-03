<?php

class bitacoraModel extends Conexion{

    public static function listar(){
        try {
             
                $sql= "SELECT * FROM bitacora, usuarios WHERE bitacora.id_usuario=usuarios.id";
                $consulta= Conexion::conect()->prepare($sql);
                $consulta->setFetchMode(PDO::FETCH_ASSOC);
                $consulta->execute();
                return $consulta;
                

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}