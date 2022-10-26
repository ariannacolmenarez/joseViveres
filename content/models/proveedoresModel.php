<?php

class proveedoresModel extends Conexion{
    private $id;
    private $nombre;
    private $contacto;
    private $tipoDoc;
    private $nroDoc;
    private $direccion;

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

    public function getcontacto(){
        return $this->contacto;
    }

    public function setcontacto( $contacto){
        $this->contacto=$contacto;
    }

    public function gettipoDoc(){
        return $this->tipoDoc;
    }

    public function settipoDoc( $tipoDoc){
        $this->tipoDoc=$tipoDoc;
    }

    public function getnroDoc(){
        return $this->nroDoc;
    }

    public function setnroDoc( $nroDoc){
        $this->nroDoc=$nroDoc;
    }

    public function getdireccion(){
        return $this->direccion;
    }

    public function setdireccion( $direccion){
        $this->direccion=$direccion;
    }

    public static function listar(){
        try {
             
                $sql= "SELECT * FROM proveedores WHERE estado !=0 ";
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
            $consulta= Conexion::conect()->prepare("SELECT * FROM proveedores WHERE id=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p= new proveedoresModel();
            $p->setid($r->id);
            $p->setnombre($r->nombre);
            $p->setcontacto($r->contacto);
            $p->settipoDoc($r->tipo_doc);
            $p->setnroDoc($r->nro_doc);
            $p->setdireccion($r->direccion);
            
            return $p;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function guardar(proveedoresModel $p){
        try {
            
            $consulta="UPDATE proveedores SET 
                nombre=?,
                nro_doc=?,
                tipo_doc=?,
                contacto=?,
                direccion=?,
                estado=?
                WHERE id=?;
            
            ";
            Conexion::conect()->prepare($consulta)->execute(array(
                $p->getnombre(),
                $p->getnroDoc(),
                $p->gettipoDoc(),
                $p->getcontacto(),
                $p->getdireccion(),
                "1",
                $p->getid(),

            ));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    

    public function registrar(proveedoresModel $p){
        try {
            $documento=$p->getnroDoc();
            if( builder::duplicados("nro_doc","proveedores","$documento") === false ){
                return $documento;
            }
            else{
                $consulta="INSERT INTO proveedores(
                    nombre , 
                    nro_doc,
                    tipo_doc,
                    contacto,
                    direccion,
                    estado)
                VALUES (?,?,?,?,?,?)";
                Conexion::conect()->prepare($consulta)->execute(array(
                    $p->getnombre(),
                    $p->getnroDoc(),
                    $p->gettipoDoc(),
                    $p->getcontacto(),
                    $p->getdireccion(),
                    "1",
                ));
                return true;
            }

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function eliminar($id){
        try {
            $estado=0;
            $consulta="UPDATE proveedores SET estado=? WHERE id=?;";
            $consulta=Conexion::conect()->prepare($consulta);
            $r=$consulta->execute(array($estado,$id));
            if($r){
                $consulta1="SELECT m.id FROM movimientos as m, proveedores as p WHERE m.id_proveedor = p.id and p.id=$id";
                $consulta1= Conexion::conect()->prepare($consulta1);
                $consulta1->setFetchMode(PDO::FETCH_ASSOC);
                $consulta1->execute();
                if ($consulta1->rowCount() > 0) {
                    foreach ($consulta1 as $row) {
                        $consulta="UPDATE movimientos SET id_proveedor=NULL WHERE id=?;";
                        Conexion::conect()->prepare($consulta)->execute(array($row['id']));
                    } 
                }
                $consulta2="SELECT i.id FROM ingreso_productos as i, proveedores as p WHERE i.id_proveedor = p.id and p.id=$id";
                $consulta2= Conexion::conect()->prepare($consulta2);
                $consulta2->setFetchMode(PDO::FETCH_ASSOC);
                $consulta2->execute();
                if ($consulta2->rowCount() > 0) {
                    foreach ($consulta2 as $row) {
                        $consulta="UPDATE ingreso_productos SET id_proveedor=NULL WHERE id=?;";
                        Conexion::conect()->prepare($consulta)->execute(array($row['id']));
                    } 
                }
            }

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function buscar($busqueda){
        try {

            $consulta="SELECT * FROM proveedores WHERE estado =? AND nombre LIKE '%$busqueda%' 
            OR contacto LIKE '%$busqueda%'";

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