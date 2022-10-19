<?php

class productosModel extends Conexion{
    private $id;
    private $nombre;
    private $descripcion;
    private $url_img;
    private $estado;
    private $id_categoria;
    private $id_marca;
    private $id_presentacion;

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

    public function getid_marca(){
        return $this->id_marca;
    }

    public function setid_marca( $id_marca){
        $this->id_marca=$id_marca;
    }

    public function getdescripcion(){
        return $this->descripcion;
    }

    public function setdescripcion( $descripcion){
        $this->descripcion=$descripcion;
    }

    public function getid_presentacion(){
        return $this->id_presentacion;
    }

    public function setid_presentacion( $id_presentacion){
        $this->id_presentacion=$id_presentacion;
    }

    public function geturl_img(){
        return $this->url_img;
    }

    public function seturl_img( $url_img){
        $this->url_img=$url_img;
    }

    public function getestado(){
        return $this->estado;
    }

    public function setestado( $estado){
        $this->estado=$estado;
    }

    public function getid_categoria(){
        return $this->id_categoria;
    }

    public function setid_categoria( $id_categoria){
        $this->id_categoria=$id_categoria;
    }

    public function listarCat(){
        try {
            
            $consulta= Conexion::conect()->prepare("SELECT * FROM cat_producto WHERE estado !=0");
            $consulta->execute();
            return $consulta->fetchALL(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function listarMarca(){
        try {
            
            $consulta= Conexion::conect()->prepare("SELECT * FROM marca_producto WHERE estado !=0");
            $consulta->execute();
            return $consulta->fetchALL(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function listarPresentacion(){
        try {
            
            $consulta= Conexion::conect()->prepare("SELECT * FROM presentacion_producto WHERE estado !=0");
            $consulta->execute();
            return $consulta->fetchALL(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function listar(){
        try {
                $sql= "SELECT p.id,p.nombre,p.url_img, m.nombre as marca,pp.volumen,pp.unidad_medida,pp.unidades FROM productos as p, marca_producto as m, presentacion_producto as pp WHERE p.estado!=0 and p.id_marca=m.id and p.id_presentacion=pp.id GROUP BY p.id;";
                
                $consulta= Conexion::conect()->prepare($sql);
                $consulta->setFetchMode(PDO::FETCH_ASSOC);
                $consulta->execute();
                return $consulta;
                


        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function registrar(productosModel $p){
        try {
            $nombre=$p->getnombre();
            if( builder::duplicados("nombre","productos","$nombre") === false ){
                return $nombre;
            }
            else{
                $consulta="INSERT INTO productos(
                    nombre , 
                    descripcion,
                    url_img,
                    estado,
                    id_categoria,
                    id_marca,
                    id_presentacion)
                VALUES (?,?,?,?,?,?,?)";
                Conexion::conect()->prepare($consulta)->execute(array(
                    $p->getnombre(),
                    $p->getdescripcion(),
                    $p->geturl_img(),
                    "1",
                    $p->getid_categoria(),
                    $p->getid_marca(),
                    $p->getid_presentacion(),
                ));
                return true;
            }
        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function consultar($id){
        try {
            $consulta= Conexion::conect()->prepare("SELECT * FROM productos WHERE id=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p= new productosModel();
            $p->seturl_img($r->url_img);
            $p->setnombre($r->nombre);
            $p->setdescripcion($r->descripcion);
            $p->setid_marca($r->id_marca);
            $p->setid_presentacion($r->id_presentacion);
            $p->setid_categoria($r->id_categoria);
            
            return $p;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function guardar(productosModel $p){
        try {
            
            if ($p->geturl_img() == NULL) {
                $consulta="UPDATE productos SET 
                nombre=? , 
                descripcion=?,
                estado=?,
                id_categoria=?,
                id_marca=?,
                id_presentacion=?
                WHERE id=?;
            ";
            Conexion::conect()->prepare($consulta)->execute(array(
                $p->getnombre(),
                $p->getdescripcion(),
                "1",
                $p->getid_categoria(),
                $p->getid_marca(),
                $p->getid_presentacion(),
                $p->getid(),

            ));
            } else {
                $consulta="UPDATE productos SET 
                nombre=? , 
                descripcion=?,
                url_img=?,
                estado=?,
                id_categoria=?,
                id_marca=?,
                id_presentacion=?
                WHERE id=?;
            ";
            Conexion::conect()->prepare($consulta)->execute(array(
                $p->getnombre(),
                $p->getdescripcion(),
                $p->geturl_img(),
                "1",
                $p->getid_categoria(),
                $p->getid_marca(),
                $p->getid_presentacion(),
                $p->getid(),

            ));
            }
            

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function eliminar($id){
        try {
            $estado=0;
            $consulta="UPDATE productos SET estado=? WHERE id=?;";
            $consulta=Conexion::conect()->prepare($consulta);
            $r = $consulta->execute(array($estado,$id));
            if($r){
                $consulta1="SELECT d.id FROM detalles_movimientos as d, productos as p WHERE d.id_producto = p.id and p.id=$id";
                $consulta1= Conexion::conect()->prepare($consulta1);
                $consulta1->setFetchMode(PDO::FETCH_ASSOC);
                $consulta1->execute();
                if ($consulta1->rowCount() > 0) {
                    foreach ($consulta1 as $row) {
                        $consulta="UPDATE detalles_movimientos SET id_producto=NULL WHERE id=?;";
                        Conexion::conect()->prepare($consulta)->execute(array($row['id']));
                    } 
                }
                $consulta2="SELECT i.id FROM ingreso_productos as i, productos as p WHERE i.id_producto = p.id and p.id=$id";
                $consulta2= Conexion::conect()->prepare($consulta2);
                $consulta2->setFetchMode(PDO::FETCH_ASSOC);
                $consulta2->execute();
                if ($consulta2->rowCount() > 0) {
                    foreach ($consulta2 as $row) {
                        $consulta="UPDATE ingreso_productos SET id_producto=NULL WHERE id=?;";
                        Conexion::conect()->prepare($consulta)->execute(array($row['id']));
                    } 
                }

            }

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function totalProd(){
        try {
            $sql = 'SELECT COUNT(p.id) as prod FROM productos as p WHERE p.estado = 1';
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

            $consulta="SELECT p.id,p.nombre,p.url_img, m.nombre as marca,pp.volumen,pp.unidad_medida,pp.unidades FROM productos as p, marca_producto as m, presentacion_producto as pp WHERE p.nombre LIKE '%$busqueda%' OR m.nombre LIKE '%$busqueda%' and p.estado =1 AND p.id_marca=m.id  GROUP BY p.id";

            $consulta= Conexion::conect()->prepare($consulta);
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            $consulta->execute();
            return $consulta;

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }


}

?>