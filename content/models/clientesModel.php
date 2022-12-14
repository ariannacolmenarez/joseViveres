<?php

class clientesModel extends Conexion{
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
             
                $sql= "SELECT * FROM clientes WHERE estado !=0 ";
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
            $consulta= Conexion::conect()->prepare("SELECT * FROM clientes WHERE id=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p= new clientesModel();
            $p->setid($r->id);
            $p->setnombre($r->nombre);
            $p->settelefono($r->telefono);
            $p->settipoDoc($r->tipo_doc);
            $p->setnroDoc($r->nro_doc);
            
            return $p;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function guardar(clientesModel $p){
        try {
            
            $consulta="UPDATE clientes SET 
                nombre=?,
                nro_doc=?,
                tipo_doc=?,
                telefono=?,
                estado=?
                WHERE id=?;
            ";
            Conexion::conect()->prepare($consulta)->execute(array(
                $p->getnombre(),
                $p->getnroDoc(),
                $p->gettipoDoc(),
                $p->gettelefono(),
                "1",
                $p->getid(),
            ));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function registrar(clientesModel $p){
        try {
            $documento=$p->getnroDoc();
            if( builder::duplicados("nro_doc","clientes","$documento") === false ){
                return $documento;
            }
            else{
                $consulta="INSERT INTO clientes(
                    nombre , 
                    nro_doc,
                    tipo_doc,
                    telefono,
                    estado)
                VALUES (?,?,?,?,?)";
                Conexion::conect()->prepare($consulta)->execute(array(
                    $p->getnombre(),
                    $p->getnroDoc(),
                    $p->gettipoDoc(),
                    $p->gettelefono(),
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
            $consulta="UPDATE clientes SET estado=? WHERE id=?;";
            $consulta=Conexion::conect()->prepare($consulta);
            $r=$consulta->execute(array($estado,$id));
            if($r){
                $consulta1="SELECT m.id FROM movimientos as m, clientes as c WHERE m.id_cliente = c.id and c.id=$id";
                $consulta1= Conexion::conect()->prepare($consulta1);
                $consulta1->setFetchMode(PDO::FETCH_ASSOC);
                $consulta1->execute();
                if ($consulta1->rowCount() > 0) {
                    foreach ($consulta1 as $row) {
                        $consulta="UPDATE movimientos SET id_cliente=NULL WHERE id=?;";
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

            $consulta="SELECT * FROM clientes WHERE estado =? AND nombre LIKE '%$busqueda%' 
            OR telefono LIKE '%$busqueda%'";

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