<?php

class productosModel extends Conexion{
    private $id;
    private $nombre;
    private $cantidad;
    private $descripcion;
    private $precio_costo;
    private $precio_venta;
    private $url_img;
    private $estado;
    private $id_categoria;

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

    public function getcantidad(){
        return $this->cantidad;
    }

    public function setcantidad( $cantidad){
        $this->cantidad=$cantidad;
    }

    public function getdescripcion(){
        return $this->descripcion;
    }

    public function setdescripcion( $descripcion){
        $this->descripcion=$descripcion;
    }

    public function getprecio_costo(){
        return $this->precio_costo;
    }

    public function setprecio_costo( $precio_costo){
        $this->precio_costo=$precio_costo;
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

    public function getprecio_venta(){
        return $this->precio_venta;
    }

    public function setprecio_venta( $precio_venta){
        $this->precio_venta=$precio_venta;
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

    public function registrar(productosModel $p){
        try {
            $nombre=$p->getnombre();
            if( builder::duplicados("nombre","productos","$nombre") === false ){
                return $nombre;
            }
            else{
                $consulta="INSERT INTO productos(
                    nombre , 
                    cantidad,
                    descripcion,
                    precio_costo,
                    precio_venta,
                    url_img,
                    estado,
                    id_categoria)
                VALUES (?,?,?,?,?,?,?,?)";
                Conexion::conect()->prepare($consulta)->execute(array(
                    $p->getnombre(),
                    $p->getcantidad(),
                    $p->getdescripcion(),
                    $p->getprecio_costo(),
                    $p->getprecio_venta(),
                    $p->geturl_img(),
                    "1",
                    $p->getid_categoria(),
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
            $p->setcantidad($r->cantidad);
            $p->setprecio_costo($r->precio_costo);
            $p->setprecio_venta($r->precio_venta);
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
                nombre =? , 
                cantidad =?,
                descripcion=?,
                precio_costo=?,
                precio_venta=?,
                estado=?,
                id_categoria=?
                WHERE id=?;
            ";
            Conexion::conect()->prepare($consulta)->execute(array(
                $p->getnombre(),
                $p->getcantidad(),
                $p->getdescripcion(),
                $p->getprecio_costo(),
                $p->getprecio_venta(),
                "1",
                $p->getid_categoria(),
                $p->getid(),

            ));
            } else {
                $consulta="UPDATE productos SET 
                nombre =? , 
                cantidad =?,
                descripcion=?,
                precio_costo=?,
                precio_venta=?,
                url_img=?,
                estado=?,
                id_categoria=?
                WHERE id=?;
            ";
            Conexion::conect()->prepare($consulta)->execute(array(
                $p->getnombre(),
                $p->getcantidad(),
                $p->getdescripcion(),
                $p->getprecio_costo(),
                $p->getprecio_venta(),
                $p->geturl_img(),
                "1",
                $p->getid_categoria(),
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
            Conexion::conect()->prepare($consulta)->execute(array($estado,$id));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }


}

?>