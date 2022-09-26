<?php 
class inventarioModel extends Conexion {

    public function __construct(){
        parent::conect();
    }

    public function listarCategoriasProd(){
        try {
            
            $consulta= Conexion::conect()->prepare("SELECT * FROM cat_producto WHERE estado !=0");
            $consulta->execute();
            return $consulta->fetchALL(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
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

    public function totalProd(){
        try {
            $sql = 'SELECT COUNT(id) as prod FROM productos WHERE estado = 1';
            $consulta= Conexion::conect()->prepare($sql);
            $consulta->execute();
            $r = $consulta->fetch(PDO::FETCH_ASSOC);
            return $r;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function buscar($busqueda){
        try {

            $consulta="SELECT * FROM productos WHERE estado =? AND nombre LIKE '%$busqueda%' 
            OR precio_venta LIKE '%$busqueda%'";

            $consulta= Conexion::conect()->prepare($consulta);
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            $consulta->execute(array("1"));
            return $consulta;

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

}


?>