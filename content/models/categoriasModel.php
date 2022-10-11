<?php

class categoriasModel extends Conexion{
    private $id;
    private $nombre;

    public function __construct(){
        parent::conect();
    }

    public function getid(){
        return $this->id;
    }

    public function setid( $id){
        $this->id=$id;
    }

    public function getnombre(){
        return $this->nombre;
    }

    public function setnombre( $nombre){
        $this->nombre=$nombre;
    }

    public static function listar(){
        try {
            $sql= "SELECT * FROM cat_producto WHERE estado !=0";
            $consulta= Conexion::conect()->prepare($sql);
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            $consulta->execute();
            return $consulta;
                
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function consultar($id){
        try {
            $consulta= Conexion::conect()->prepare("SELECT * FROM cat_producto WHERE id=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p= new categoriasModel();
            $p->setid($r->id);
            $p->setnombre($r->categoria);
            
            return $p;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function listarProdCat($id){
        $sql= "SELECT * FROM productos WHERE estado !=0 AND id_categoria=$id";
        $consulta= Conexion::conect()->prepare($sql);
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        return $consulta;
    }

    public function guardar(categoriasModel $p){
        try {
            
            $consulta="UPDATE cat_producto SET 
                categoria=?
                WHERE id=?;
            ";
            Conexion::conect()->prepare($consulta)->execute(array(
                $p->getnombre(),
                $p->getid(),

            ));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function registrar(categoriasModel $p){
        try { 
            $categoria=$p->getnombre();
            if(builder::duplicados("categoria","cat_producto","$categoria") === false ){
                return $categoria;
            }
            else{
                $consulta="INSERT INTO cat_producto(
                    categoria, estado)
                VALUES (?,?)";
                Conexion::conect()->prepare($consulta)->execute(array(
                    $p->getnombre(),
                    "1"
                ));
                return true;
            }
            
        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function eliminarProd($id){
        try {
            $consulta="UPDATE productos SET id_categoria=NULL WHERE id=?;";
            Conexion::conect()->prepare($consulta)->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function eliminarCat($id){
        try {
            $consulta="UPDATE cat_producto SET estado=0 WHERE id=?;";
            $consulta = Conexion::conect()->prepare($consulta);
            $r = $consulta->execute(array($id));
            if($r){
                $consulta1="SELECT p.id FROM productos as p, cat_producto as c WHERE p.id_categoria = c.id and c.id=$id";
                $consulta1= Conexion::conect()->prepare($consulta1);
                $consulta1->setFetchMode(PDO::FETCH_ASSOC);
                $consulta1->execute();
                var_dump($consulta1->rowCount());
                if ($consulta1->rowCount() > 0) {
                    foreach ($consulta1 as $row) {
                        var_dump($row['id']);
                        $consulta="UPDATE productos SET id_categoria=NULL WHERE id=?;";
                        Conexion::conect()->prepare($consulta)->execute(array($row['id']));
                    } 
                }else{
                    return 0;
                }
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function buscarCat($busqueda){
        try {

            $consulta="SELECT * FROM cat_producto WHERE estado =? AND categoria LIKE '%$busqueda%'";

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