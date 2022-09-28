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

    public function guardar(proveedoresModel $p){
        try {
            
            $consulta="UPDATE persona SET 
                nombre=?,
                nro_doc=?,
                tipo_doc=?,
                telefono=?,
                comentario=?,
                estado=?,
                id_tipo_persona=?
                WHERE id=?;
            
            ";
            Conexion::conect()->prepare($consulta)->execute(array(
                $p->getnombre(),
                $p->getnroDoc(),
                $p->gettipoDoc(),
                $p->gettelefono(),
                $p->getcomentario(),
                "1",
                "1",
                $p->getid(),

            ));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function registrar(categoriasModel $p){
        try { 
            $consulta="INSERT INTO cat_producto(
                categoria, estado)
            VALUES (?,?)";
            Conexion::conect()->prepare($consulta)->execute(array(
                $p->getnombre(),
                "1"
            ));
        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function eliminarProd($id){
        try {
            $consulta="UPDATE productos SET id_categoria='' WHERE id=?;";
            Conexion::conect()->prepare($consulta)->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function buscar($busqueda){
        try {

            $consulta="SELECT * FROM persona WHERE estado =? AND id_tipo_persona=? AND nombre LIKE '%$busqueda%' 
            OR telefono LIKE '%$busqueda%'";

            $consulta= Conexion::conect()->prepare($consulta);
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            $consulta->execute(array("1","1"));
            return $consulta;

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }


}

?>