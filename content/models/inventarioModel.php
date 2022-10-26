<?php 
class inventarioModel extends Conexion {

    public function __construct(){
        parent::conect();
    }

    public function listarCategoriasProd(){
        try {
            
            $consulta= Conexion::conect()->prepare("SELECT * FROM cat_producto WHERE estado !=0");
            $consulta->execute();
            return $consulta->fetchALL(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function listar($opcion){
        try {
                if ($opcion != "") {
                    $sql= "SELECT * FROM (SELECT p.id,p.nombre,p.url_img, m.nombre as marca,pp.volumen,pp.unidad_medida,pp.unidades, (SELECT precio_venta FROM ingreso_detalles WHERE id_producto = p.id ORDER BY id DESC LIMIT 1) as precio_venta, (SELECT SUM(cantidad) FROM ingreso_detalles WHERE id_producto=p.id AND estado !=0 ) as cantidad FROM productos as p, marca_producto as m, presentacion_producto as pp,ingreso_detalles as i,ingreso_productos as ig WHERE p.estado !=0 and p.id=i.id_producto AND i.id_ingreso=ig.id AND p.id_marca=m.id AND p.id_presentacion=pp.id and p.id_categoria=$opcion GROUP BY p.id) as productos WHERE cantidad >0";
                }else{
                    $sql= "SELECT * FROM (SELECT p.id,p.nombre,p.url_img, m.nombre as marca,pp.volumen,pp.unidad_medida,pp.unidades, (SELECT precio_venta FROM ingreso_detalles WHERE id_producto = p.id ORDER BY id DESC LIMIT 1) as precio_venta, (SELECT SUM(cantidad) FROM ingreso_detalles WHERE id_producto=p.id AND estado !=0 ) as cantidad FROM productos as p, marca_producto as m, presentacion_producto as pp,ingreso_detalles as i,ingreso_productos as ig WHERE p.estado !=0 and p.id=i.id_producto AND i.id_ingreso=ig.id AND p.id_marca=m.id AND p.id_presentacion=pp.id GROUP BY p.id) as productos WHERE cantidad >0";
                }
                $consulta= Conexion::conect()->prepare($sql);
                $consulta->setFetchMode(PDO::FETCH_ASSOC);
                $consulta->execute();
                return $consulta;
                


        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function totalProd(){
        try {
            $sql = 'SELECT COUNT(p.id) as prod FROM productos as p, ingreso_detalles as i WHERE p.estado = 1 and p.id=i.id_producto and i.cantidad > 0';
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

            $consulta="SELECT * FROM (SELECT p.id,p.nombre,p.url_img, m.nombre as marca,pp.volumen,pp.unidad_medida,pp.unidades, (SELECT precio_venta FROM ingreso_detalles WHERE id_producto = p.id ORDER BY id DESC LIMIT 1) as precio_venta, (SELECT SUM(cantidad) FROM ingreso_detalles WHERE id_producto=p.id AND estado !=0 ) as cantidad FROM productos as p, marca_producto as m, presentacion_producto as pp,ingreso_detalles as i,ingreso_productos as ig WHERE p.estado !=0 and p.id=i.id_producto AND i.id_ingreso=ig.id AND p.id_marca=m.id AND p.id_presentacion=pp.id GROUP BY p.id) as productos WHERE nombre LIKE '%$busqueda%' AND cantidad >0 OR marca LIKE '%$busqueda%' AND cantidad >0;";

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