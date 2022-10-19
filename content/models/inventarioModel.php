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
                    $sql= "SELECT p.id,p.nombre,p.url_img, m.nombre as marca,pp.volumen,pp.unidad_medida,pp.unidades, i.precio_venta, (SELECT SUM(cantidad) FROM ingreso_productos WHERE id_producto=p.id AND estado !=0 ) as cantidad FROM productos as p, marca_producto as m, presentacion_producto as pp,ingreso_productos as i WHERE p.estado !=0 and p.id=i.id_producto and id_categoria = $opcion AND i.fecha = ( SELECT MAX(fecha) FROM ingreso_productos ) GROUP BY p.id;";
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

    public function totalProd(){
        try {
            $sql = 'SELECT COUNT(p.id) as prod FROM productos as p, ingreso_productos as i WHERE p.estado = 1 and p.id=i.id_producto and i.cantidad > 0;';
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