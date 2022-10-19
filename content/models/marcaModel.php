<?php

class marcaModel extends Conexion{
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
            $sql= "SELECT * FROM marca_producto WHERE estado !=0";
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
            $consulta= Conexion::conect()->prepare("SELECT * FROM marca_producto WHERE id=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p= new marcaModel();
            $p->setid($r->id);
            $p->setnombre($r->nombre);
            
            return $p;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function guardar(marcaModel $p){
        try {
            
            $consulta="UPDATE marca_producto SET 
                nombre=?
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

    public function registrar(marcaModel $p){
        try { 
            $marca=$p->getnombre();
            if(builder::duplicados("nombre","marca_producto","$marca") === false ){
                return $marca;
            }
            else{
                $consulta="INSERT INTO marca_producto(
                    nombre, estado)
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

    public function eliminarMarca($id){
        try {
            $consulta="UPDATE marca_producto SET estado=0 WHERE id=?;";
            $consulta = Conexion::conect()->prepare($consulta);
            $r = $consulta->execute(array($id));
            if($r){
                $consulta1="SELECT p.id FROM productos as p, marca_producto as m WHERE p.id_marca = m.id and m.id=$id";
                $consulta1= Conexion::conect()->prepare($consulta1);
                $consulta1->setFetchMode(PDO::FETCH_ASSOC);
                $consulta1->execute();
                var_dump($consulta1->rowCount());
                if ($consulta1->rowCount() > 0) {
                    foreach ($consulta1 as $row) {
                        var_dump($row['id']);
                        $consulta="UPDATE productos SET id_marca=NULL WHERE id=?;";
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

    public function buscarMarca($busqueda){
        try {

            $consulta="SELECT * FROM marca_producto WHERE estado =? AND nombre LIKE '%$busqueda%'";

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