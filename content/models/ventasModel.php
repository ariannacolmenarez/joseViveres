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
    private $id;
    private $nombre;
    private $total;
    private $fecha;
    private $hora;
    private $estado_movimiento;
    private $id_metodo_pago;
    private $id_deuda;
    private $id_persona;
    private $productos;
    private $clientes;
    

    public function __construct(){
        parent::conect();
    }

    public function getid_prod(){
        return $this->id_prod;
    }

    public function setid_prod( $id_prod){
        $this->id_prod=$id_prod;
    }

    public function getclientes(){
        return $this->clientes;
    }

    public function setclientes( $clientes){
        $this->clientes=$clientes;
    }

    public function getproductos(){
        return $this->productos;
    }

    public function setproductos( $productos){
        $this->productos=$productos;
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

    public function gettotal(){
        return $this->total;
    }

    public function settotal( $total){
        $this->total=$total;
    }

    public function getfecha(){
        return $this->fecha;
    }

    public function setfecha( $fecha){
        $this->fecha=$fecha;
    }

    public function gethora(){
        return $this->hora;
    }

    public function sethora( $hora){
        $this->hora=$hora;
    }

    public function getestado_movimiento(){
        return $this->estado_movimiento;
    }

    public function setestado_movimiento( $estado_movimiento){
        $this->estado_movimiento=$estado_movimiento;
    }

    public function getid_metodo_pago(){
        return $this->id_metodo_pago;
    }

    public function setid_metodo_pago( $id_metodo_pago){
        $this->id_metodo_pago=$id_metodo_pago;
    }

    public function getid_deuda(){
        return $this->id_deuda;
    }

    public function setid_deuda( $id_deuda){
        $this->id_deuda=$id_deuda;
    }

    public function getid_persona(){
        return $this->id_persona;
    }

    public function setid_persona( $id_persona){
        $this->id_persona=$id_persona;
    }

    public function listar($opcion){
        try {
                if ($opcion != "") {
                    $sql= "SELECT p.id,p.nombre,p.url_img, m.nombre as marca,pp.volumen,pp.unidad_medida,pp.unidades, i.precio_venta, (SELECT SUM(cantidad) FROM ingreso_productos WHERE id_producto=p.id AND estado !=0 ) as cantidad FROM productos as p, marca_producto as m, presentacion_producto as pp,ingreso_productos as i WHERE p.estado !=0 and p.id=i.id_producto and id_categoria = $opcion AND i.fecha = ( SELECT MAX(fecha) FROM ingreso_productos ) GROUP BY p.id; ";
                }else{
                    $sql= "SELECT p.id,p.nombre,p.url_img, m.nombre as marca,pp.volumen,pp.unidad_medida,pp.unidades,i.id as id2, i.precio_venta, (SELECT SUM(cantidad) FROM ingreso_productos WHERE id_producto=p.id AND estado !=0 ) as cantidad FROM productos as p, marca_producto as m, presentacion_producto as pp,ingreso_productos as i WHERE p.estado !=0 and p.id=i.id_producto AND i.fecha = ( SELECT MAX(fecha) FROM ingreso_productos ) GROUP BY p.id";
                }
                $consulta= Conexion::conect()->prepare($sql);
                $consulta->setFetchMode(PDO::FETCH_ASSOC);
                $consulta->execute();
                return $consulta;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function listarClientes(){
        try {

            $consulta= Conexion::conect()->prepare("SELECT * FROM persona WHERE estado !=0 AND id_tipo_persona=2");
            $consulta->execute();
            return $consulta->fetchALL(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function listarCategorias(){
        try {
            
            $consulta= Conexion::conect()->prepare("SELECT * FROM cat_producto WHERE estado !=0");
            $consulta->execute();
            return $consulta->fetchALL(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function consultarprod($id){
        try {
            $consulta= Conexion::conect()->prepare("SELECT p.id,p.nombre,p.url_img, m.nombre as marca,pp.volumen,pp.unidad_medida,pp.unidades, i.precio_venta, (SELECT SUM(cantidad) FROM ingreso_productos WHERE id_producto=p.id AND estado !=0 ) as cantidad FROM productos as p, marca_producto as m, presentacion_producto as pp,ingreso_productos as i WHERE p.estado !=0 and p.id=i.id_producto and p.id=? AND i.fecha = ( SELECT MAX(fecha) FROM ingreso_productos )");
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

    public function eliminar($id){
        try {
            $estado=0;
            $consulta= Conexion::conect()->prepare("SELECT i.id, i.cantidad as stock, d.cantidad FROM detalles_movimientos as d, productos as p, movimientos as m, ingreso_productos as i WHERE m.id ='$id' AND d.id_movimientos=m.id AND d.id_producto=p.id AND i.id_producto=p.id AND i.fecha = ( SELECT MAX(fecha) FROM ingreso_productos );");
            $consulta->execute();
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $producto = $r->id;
            $stock = $r->stock;
            $cantidad = $r->cantidad;
            $cantidadTotal= $stock + $cantidad;

            $consulta="UPDATE movimientos SET estado=? WHERE id=?;";
            Conexion::conect()->prepare($consulta)->execute(array($estado,$id));
            $consulta="UPDATE ingreso_productos SET cantidad=? WHERE id=?;";
            Conexion::conect()->prepare($consulta)->execute(array($cantidadTotal,$producto));

            $consulta1="SELECT d.id FROM detalles_movimientos as d, movimientos as m WHERE d.id_movimientos = m.id and m.id=$id";
            $consulta1= Conexion::conect()->prepare($consulta1);
            $consulta1->setFetchMode(PDO::FETCH_ASSOC);
            $consulta1->execute();
            if ($consulta1->rowCount() > 0) {
                foreach ($consulta1 as $row) {
                    $consulta="UPDATE detalles_movimientos SET id_movimientos=NULL WHERE id=?;";
                    Conexion::conect()->prepare($consulta)->execute(array($row['id']));
                } 
            }

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function ingresoAnterior(){
        try{
            $sql="SELECT i.id,i.cantidad, MIN(i.fecha) FROM ingreso_productos as i WHERE i.estado=1 AND i.cantidad > 0;"; 
            $sql = Conexion::conect()->prepare($sql);
            $sql->execute();
            $r=$sql->fetch(PDO::FETCH_OBJ);
            return $r;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function registrar(ventasModel $p){
        try {
            $ingreso=$this->ingresoAnterior();
            
            $pdo=Conexion::conect();
                $consulta="INSERT INTO movimientos(
                    total , 
                    fecha,
                    hora,
                    estado_movimiento,
                    estado,
                    id_concepto_movimiento,
                    id_metodo_pago,
                    id_persona)
                VALUES (?,?,?,?,?,?,?,?)";
                $consulta =$pdo->prepare($consulta);
                $execute = $consulta->execute(array(
                    $p->gettotal(),
                    $p->getfecha(),
                    $p->gethora(),
                    $p->getestado_movimiento(),
                    "1",
                    "1",
                    $p->getid_metodo_pago(),
                    $p->getid_persona(),
                ));
                if ($execute) {
                    $lastInsertId = $pdo->lastInsertId();
                }else{
                    $lastInsertId = 0;
                    echo $consulta->errorInfo()[2];
                }
                
                foreach ($p->getproductos() as $row) {
                
                    $precio = $row['value']['precio_venta'];
                    $cantidad = $row['value']['agregado'];
                    $estado = 1;
                    $id_mov = $lastInsertId;
                    $id_producto = $row['value']['id'];
                    $cantidadProd = $row['value']['cantidad'];
                    
                    
                    $stmt = Conexion::conect()->prepare('INSERT INTO detalles_movimientos(precio, cantidad, estado,id_movimientos, id_producto)
                                            VALUES(:precio, :cantidad, :estado, :id_movimiento, :id_producto);
                                        ');
                
                    $stmt->execute([':precio' => $precio,
                                    ':cantidad' => $cantidad,
                                    ':estado' => $estado,
                                    ':id_movimiento' => $id_mov,
                                    ':id_producto' => $id_producto
                                    ]);

                    if ($cantidad <= $ingreso->cantidad) {

                        $totalDesc = $ingreso->cantidad - $cantidad;
                        $consulta="UPDATE ingreso_productos SET 
                        cantidad=?,
                        estado=?
                        WHERE id=?;";

                        Conexion::conect()->prepare($consulta)->execute(array(
                            $totalDesc,
                            2,
                            $ingreso->id
                        ));

                    }else {
                        $totalDesc = $cantidad - $ingreso->cantidad;
                        $consulta="UPDATE ingreso_productos SET 
                        cantidad=?,
                        estado=?
                        WHERE id=?;";

                        Conexion::conect()->prepare($consulta)->execute(array(
                            0,
                            2,
                            $ingreso->id
                        ));
                        $ing=$this->ingresoAnterior();
                        $consulta="UPDATE ingreso_productos SET 
                        cantidad=?,
                        estado=?
                        WHERE id=?;";
                        $total= $ing->cantidad - $totalDesc;
                        Conexion::conect()->prepare($consulta)->execute(array(
                            $total,
                            2,
                            $ing->id
                        ));
                    }
                }
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function buscar($busqueda){
        try {

            $consulta="SELECT p.id,p.nombre,p.url_img, m.nombre as marca,pp.volumen,pp.unidad_medida,pp.unidades,(SELECT precio_venta FROM ingreso_productos WHERE id_producto=p.id AND estado !=0 and fecha = ( SELECT MAX(fecha) FROM ingreso_productos ) ) as precio_venta, (SELECT SUM(cantidad) FROM ingreso_productos WHERE id_producto=p.id AND estado !=0 ) as cantidad FROM productos as p, marca_producto as m, presentacion_producto as pp, ingreso_productos as i WHERE p.nombre LIKE '%$busqueda%' OR m.nombre LIKE '%$busqueda%' and p.estado =1 AND p.id_marca=m.id  GROUP BY p.id";

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