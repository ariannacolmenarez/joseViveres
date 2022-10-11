<?php

class proveedoresModel extends Conexion{
    private $id;
    private $nombre;
    private $telefono;
    private $tipoDoc;
    private $nroDoc;
    private $comentario;

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

    public function gettelefono(){
        return $this->telefono;
    }

    public function settelefono( $telefono){
        $this->telefono=$telefono;
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

    public function getcomentario(){
        return $this->comentario;
    }

    public function setcomentario( $comentario){
        $this->comentario=$comentario;
    }

    public static function listar(){
        try {
             
                $sql= "SELECT * FROM persona WHERE estado !=0 AND id_tipo_persona= 1";
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
            $consulta= Conexion::conect()->prepare("SELECT * FROM persona WHERE id=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p= new proveedoresModel();
            $p->setid($r->id);
            $p->setnombre($r->nombre);
            $p->settelefono($r->telefono);
            $p->settipoDoc($r->tipo_doc);
            $p->setnroDoc($r->nro_doc);
            $p->setcomentario($r->comentario);
            
            return $p;

        } catch (Exception $e) {
            die($e->getMessage());
        }
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

    

    public function registrar(proveedoresModel $p){
        try {
            $documento=$p->getnroDoc();
            $resp=builder::duplicado_persona("$documento",1);
            if( builder::duplicado_persona("$documento",1) == false ){
                return $documento;
            }
            else{
                $consulta="INSERT INTO persona(
                    nombre , 
                    nro_doc,
                    tipo_doc,
                    telefono,
                    comentario,
                    estado,
                    id_tipo_persona)
                VALUES (?,?,?,?,?,?,?)";
                Conexion::conect()->prepare($consulta)->execute(array(
                    $p->getnombre(),
                    $p->getnroDoc(),
                    $p->gettipoDoc(),
                    $p->gettelefono(),
                    $p->getcomentario(),
                    "1",
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
            $consulta="UPDATE persona SET estado=? WHERE id=?;";
            Conexion::conect()->prepare($consulta)->execute(array($estado,$id));

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