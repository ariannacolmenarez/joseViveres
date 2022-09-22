<?php

class gastosModel extends Conexion{
    private $id_prod;
    private $nombre_prod;
    private $cantidad_prod;
    private $descripcion_prod;
    private $precio_costo_prod;
    private $precio_venta_prod;
    private $url_prod;
    private $estado_prod;
    private $categoria_prod ;
    private $id;
    private $nombre;
    private $total;
    private $fecha;
    private $estado_movimiento;
    private $id_metodo_pago;
    private $id_deuda;
    private $id_persona;
    private $productos;
    

    public function __construct(){
        parent::conect();
    }

    // public function getid_prod(){
    //     return $this->id_prod;
    // }

    // public function setid_prod( $id_prod){
    //     $this->id_prod=$id_prod;
    // }

    // public function getproductos(){
    //     return $this->productos;
    // }

    // public function setproductos( $productos){
    //     $this->productos=$productos;
    // }

    // public function getnombre_prod(){
    //     return $this->nombre_prod;
    // }

    // public function setnombre_prod( $nombre_prod){
    //     $this->nombre_prod=$nombre_prod;
    // }

    // public function getcantidad_prod(){
    //     return $this->cantidad_prod;
    // }

    // public function setcantidad_prod( $cantidad_prod){
    //     $this->cantidad_prod=$cantidad_prod;
    // }

    // public function getdescripcion_prod(){
    //     return $this->descripcion_prod;
    // }

    // public function setdescripcion_prod( $descripcion_prod){
    //     $this->descripcion_prod=$descripcion_prod;
    // }

    // public function getprecio_costo_prod(){
    //     return $this->precio_costo_prod;
    // }

    // public function setprecio_costo_prod( $precio_costo_prod){
    //     $this->precio_costo_prod=$precio_costo_prod;
    // }

    // public function getprecio_venta_prod(){
    //     return $this->precio_venta_prod;
    // }

    // public function setprecio_venta_prod( $precio_venta_prod){
    //     $this->precio_venta_prod=$precio_venta_prod;
    // }

    // public function geturl_prod(){
    //     return $this->url_prod;
    // }

    // public function seturl_prod( $url_prod){
    //     $this->url_prod=$url_prod;
    // }

    // public function getestado_prod(){
    //     return $this->estado_prod;
    // }

    // public function setestado_prod( $estado_prod){
    //     $this->estado_prod=$estado_prod;
    // }

    // public function getcategoria_prod(){
    //     return $this->categoria_prod;
    // }

    // public function setcategoria_prod( $categoria_prod){
    //     $this->categoria_prod=$categoria_prod;
    // }

    // public function getid(){
    //     return $this->id;
    // }

    // public function setid( $id){
    //     $this->id=$id;
    // }

    // public function getnombre(){
    //     return $this->nombre;
    // }

    // public function setnombre( $nombre){
    //     $this->nombre=$nombre;
    // }

    // public function gettotal(){
    //     return $this->total;
    // }

    // public function settotal( $total){
    //     $this->total=$total;
    // }

    // public function getfecha(){
    //     return $this->fecha;
    // }

    // public function setfecha( $fecha){
    //     $this->fecha=$fecha;
    // }

    // public function getestado_movimiento(){
    //     return $this->estado_movimiento;
    // }

    // public function setestado_movimiento( $estado_movimiento){
    //     $this->estado_movimiento=$estado_movimiento;
    // }

    // public function getid_metodo_pago(){
    //     return $this->id_metodo_pago;
    // }

    // public function setid_metodo_pago( $id_metodo_pago){
    //     $this->id_metodo_pago=$id_metodo_pago;
    // }

    // public function getid_deuda(){
    //     return $this->id_deuda;
    // }

    // public function setid_deuda( $id_deuda){
    //     $this->id_deuda=$id_deuda;
    // }

    // public function getid_persona(){
    //     return $this->id_persona;
    // }

    // public function setid_persona( $id_persona){
    //     $this->id_persona=$id_persona;
    // }

    public function listar(){
        try {
             
                $sql= "SELECT * FROM cat_operacion WHERE estado !=0";
                $consulta= Conexion::conect()->prepare($sql);
                $consulta->setFetchMode(PDO::FETCH_ASSOC);
                $consulta->execute();
                return $consulta;
                


        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    // public function consultar($id){
    //     try {
    //         $consulta= Conexion::conect()->prepare("SELECT * FROM productos WHERE id=?;");
    //         $consulta->execute(array($id));
    //         $r=$consulta->fetch(PDO::FETCH_OBJ);
    //         $p= new ventasModel();
    //         $p->setid_prod($r->id);
    //         $p->setnombre_prod($r->nombre);
    //         $p->setcantidad_prod($r->cantidad);
    //         $p->setprecio_venta_prod($r->precio_venta);
    //         return $p;

    //     } catch (Exception $e) {
    //         die($e->getMessage());
    //     }
    // }

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

    // public function registrar(ventasModel $p){
    //     try {
            
    //         $consulta="INSERT INTO operacion(
    //             total , 
    //             fecha_hora,
    //             estado_movimiento,
    //             estado,
    //             id_cat_operacion,
    //             id_metodo_pago,
    //             id_persona)
    //         VALUES (?,?,?,?,?,?,?)";
    //         Conexion::conect()->prepare($consulta)->execute(array(
    //             $p->gettotal(),
    //             $p->getfecha(),
    //             $p->getestado_movimiento(),
    //             "1",
    //             "1",
    //             $p->getid_metodo_pago(),
    //             $p->getid_persona()
    //         ));
    //         $id_operacion = Conexion::conect()->lastInsertId();
            
    //         foreach ($p->getproductos() as $row) {

    //             $precio = $row[0]['precio_venta'];
    //             $cantidad = $row[0]['agregado'];
    //             $estado = 1;
    //             $id_op = $id_operacion;
    //             $id_producto = $row[0]['id'];
              
    //             $stmt = Conexion::conect()->prepare('INSERT INTO detalles(precio, cantidad, estado,      
    //                                     id_operacion, id_producto)
    //                                     VALUES(:precio, :cantidad, :estado, :id_operacion, :id_producto);
    //                                    ');
              
    //             $stmt->execute([':precio' => $precio,
    //                             ':cantidad' => $cantidad,
    //                             ':estado' => $estado,
    //                             ':id_operacion' => 5,
    //                             ':id_producto' => $id_producto
    //                             ]);
    //        }

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