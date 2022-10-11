<?php

class reporteinventarioModel extends Conexion{

    public function __construct(){
        parent::conect();
    }

    public function getInventario(){ 
        $resultado='';
        $sql="SELECT * FROM productos WHERE estado=1";
    try {
        $consulta= Conexion::conect()->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetchALL(PDO::FETCH_OBJ);
        return $resultado;
    } catch (Exception $e) {
        return $e->getMessage();
    }
 }
}


?>