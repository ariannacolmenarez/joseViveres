<?php

class ventasModel extends Conexion{
    private $id_prod;
    private $nombre_prod;
    private $cantidad_prod;
    private $descripcion_prod;
    private $precio_costo_prod;
    private $precio_venta_prod;
    private $url_prod;
    private $estado_prod;
    private $categoria_prod ;

    public function __construct(){
        parent::conect();
    }

    public function getid_prod(){
        return $this->id_prod;
    }

    public function setid_prod( $id_prod){
        $this->id_prod=$id_prod;
    }

    public function getnombre_prod(){
        return $this->nombre_prod;
    }

    public function setnombre_prod( $nombre_prod){
        $this->nombre_prod=$nombre_prod;
    }

    public function getcantidad_prod(){
        return $this->cantidad_prod;
    }

    public function setcantidad_prod( $cantidad_prod){
        $this->cantidad_prod=$cantidad_prod;
    }

    public function getdescripcion_prod(){
        return $this->descripcion_prod;
    }

    public function setdescripcion_prod( $descripcion_prod){
        $this->descripcion_prod=$descripcion_prod;
    }

    public function getprecio_costo_prod(){
        return $this->precio_costo_prod;
    }

    public function setprecio_costo_prod( $precio_costo_prod){
        $this->precio_costo_prod=$precio_costo_prod;
    }

    public function getprecio_venta_prod(){
        return $this->precio_venta_prod;
    }

    public function setprecio_venta_prod( $precio_venta_prod){
        $this->precio_venta_prod=$precio_venta_prod;
    }

    public function geturl_prod(){
        return $this->url_prod;
    }

    public function seturl_prod( $url_prod){
        $this->url_prod=$url_prod;
    }

    public function getestado_prod(){
        return $this->estado_prod;
    }

    public function setestado_prod( $estado_prod){
        $this->estado_prod=$estado_prod;
    }

    public function getcategoria_prod(){
        return $this->categoria_prod;
    }

    public function setcategoria_prod( $categoria_prod){
        $this->categoria_prod=$categoria_prod;
    }

    public function listar(){
        try {
             
                $sql= "SELECT * FROM productos WHERE estado !=0";
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
            $consulta= Conexion::conect()->prepare("SELECT * FROM productos WHERE id=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p= new ventasModel();
            $p->setid_prod($r->id);
            $p->setnombre_prod($r->nombre);
            $p->setcantidad_prod($r->cantidad);
            $p->setprecio_venta_prod($r->precio_venta);
            return $p;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    // public function guardar(proveedoresModel $p){
    //     try {
            
    //         $consulta="UPDATE persona SET 
    //             nombre=?,
    //             nro_doc=?,
    //             tipo_doc=?,
    //             telefono=?,
    //             comentario=?,
    //             estado=?,
    //             id_tipo_persona=?
    //             WHERE id=?;
            
    //         ";
    //         Conexion::conect()->prepare($consulta)->execute(array(
    //             $p->getnombre(),
    //             $p->getnroDoc(),
    //             $p->gettipoDoc(),
    //             $p->gettelefono(),
    //             $p->getcomentario(),
    //             "1",
    //             "1",
    //             $p->getid(),

    //         ));

    //     } catch (Exception $e) {

    //         die($e->getMessage());
    //     }
    // }

    // public function registrar(proveedoresModel $p){
    //     try {
            
    //         $consulta="INSERT INTO persona(
    //             nombre , 
    //             nro_doc,
    //             tipo_doc,
    //             telefono,
    //             comentario,
    //             estado,
    //             id_tipo_persona)
    //         VALUES (?,?,?,?,?,?,?)";
    //         Conexion::conect()->prepare($consulta)->execute(array(
    //             $p->getnombre(),
    //             $p->getnroDoc(),
    //             $p->gettipoDoc(),
    //             $p->gettelefono(),
    //             $p->getcomentario(),
    //             "1",
    //             "1",
    //         ));

    //     } catch (Exception $e) {

    //         die($e->getMessage());
    //     }
    // }

    // public function eliminar($id){
    //     try {
    //         $estado=0;
    //         $consulta="UPDATE persona SET estado=? WHERE id=?;";
    //         Conexion::conect()->prepare($consulta)->execute(array($estado,$id));

    //     } catch (Exception $e) {

    //         die($e->getMessage());
    //     }
    // }

    // public function buscar($busqueda){
    //     try {

    //         $consulta="SELECT * FROM persona WHERE estado =? AND nombre LIKE '%$busqueda%' 
    //         OR telefono LIKE '%$busqueda%'";

    //         $consulta= Conexion::conect()->prepare($consulta);
    //         $consulta->setFetchMode(PDO::FETCH_ASSOC);
    //         $consulta->execute(array("1"));
    //         return $consulta;

    //     } catch (Exception $e) {

    //         die($e->getMessage());
    //     }
    // }


}

?>