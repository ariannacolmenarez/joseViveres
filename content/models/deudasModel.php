<?php
class deudasModel extends Conexion{
   
    public function __construct(){
        parent::conect();
    }

    public function listar($opcion){
        try {
                if ($opcion != "") {
                    $sql= "SELECT * FROM productos WHERE estado !=0 AND id_categoria = $opcion";
                }else{
                    $sql= "SELECT * FROM productos WHERE estado !=0";
                }
                $consulta= Conexion::conect()->prepare($sql);
                $consulta->setFetchMode(PDO::FETCH_ASSOC);
                $consulta->execute();
                return $consulta;
                


        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
?>