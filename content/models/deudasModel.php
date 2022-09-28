<?php
class deudasModel extends Conexion{
   
    private $id_abono;
    private $metodo_abono;
    private $valor_abono;
    private $concepto_abono;
    private $fecha_abono;

    public function __construct(){
        parent::conect();
    }

    public function getid_abono(){
        return $this->id_abono;
    }

    public function setid_abono( $id_abono){
        $this->id_abono=$id_abono;
    }

    public function getmetodo_abono(){
        return $this->metodo_abono;
    }

    public function setmetodo_abono( $metodo_abono){
        $this->metodo_abono=$metodo_abono;
    }

    public function getvalor_abono(){
        return $this->valor_abono;
    }

    public function setvalor_abono( $valor_abono){
        $this->valor_abono=$valor_abono;
    }

    public function getconcepto_abono(){
        return $this->concepto_abono;
    }

    public function setconcepto_abono( $concepto_abono){
        $this->concepto_abono=$concepto_abono;
    }

    public function getfecha_abono(){
        return $this->fecha_abono;
    }

    public function setfecha_abono( $fecha_abono){
        $this->fecha_abono=$fecha_abono;
    }


    public function listarDeudasPagar(){
        try {
            $sql= "SELECT p.nombre, SUM(m.total)as monto, COUNT(m.id) as cant ,p.id, SUM( CASE WHEN (SELECT SUM(monto) FROM abono_movimiento WHERE id_movimiento=m.id) IS NULL THEN (SELECT total FROM movimientos WHERE id=m.id) ELSE ((SELECT total FROM movimientos WHERE id=m.id)-(SELECT SUM(monto) FROM abono_movimiento WHERE id_movimiento=m.id)) END) as suma FROM movimientos as m, concepto_movimiento as c, persona as p WHERE m.id_concepto_movimiento=c.id AND c.id != 1 AND m.estado_movimiento = 'A CREDITO' AND m.id_persona=p.id AND m.estado =1 group by nombre";

            $consulta= Conexion::conect()->prepare($sql);
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            $consulta->execute();
            return $consulta;
                


        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function listarDeudasCobrar(){
        try {
            $sql= "SELECT p.nombre, SUM(m.total)as monto, COUNT(m.id) as cant ,p.id, SUM( CASE WHEN (SELECT SUM(monto) FROM abono_movimiento WHERE id_movimiento=m.id) IS NULL THEN (SELECT total FROM movimientos WHERE id=m.id) ELSE ((SELECT total FROM movimientos WHERE id=m.id)-(SELECT SUM(monto) FROM abono_movimiento WHERE id_movimiento=m.id)) END) as suma FROM movimientos as m, concepto_movimiento as c, persona as p WHERE m.id_concepto_movimiento=c.id AND c.id = 1 AND m.estado_movimiento = 'A CREDITO' AND m.id_persona=p.id AND m.estado =1 group by nombre";

            $consulta= Conexion::conect()->prepare($sql);
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            $consulta->execute();
            return $consulta;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function totalCobrar(){
        try {
        
            $sql= "SELECT SUM( CASE WHEN (SELECT SUM(monto) FROM abono_movimiento WHERE
            id_movimiento=m.id) IS NULL THEN (SELECT total FROM movimientos WHERE id=m.id) 
            ELSE ((SELECT total FROM movimientos WHERE id=m.id)-(SELECT SUM(monto) FROM 
            abono_movimiento WHERE id_movimiento=m.id)) END) as suma FROM movimientos as m, 
            concepto_movimiento as c, persona as p WHERE m.id_concepto_movimiento = c.id 
            AND c.id = 1 AND m.estado_movimiento = 'A CREDITO' AND m.id_persona=p.id AND m.estado =1";
            
            $consulta= Conexion::conect()->prepare($sql);
            $consulta->execute();
            $r = $consulta->fetch(PDO::FETCH_ASSOC);
            return $r;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function totalPagar(){
        try {
        
            $sql= "SELECT SUM( CASE WHEN (SELECT SUM(monto) FROM abono_movimiento WHERE
             id_movimiento=m.id) IS NULL THEN (SELECT total FROM movimientos WHERE id=m.id) 
             ELSE ((SELECT total FROM movimientos WHERE id=m.id)-(SELECT SUM(monto) FROM 
             abono_movimiento WHERE id_movimiento=m.id)) END) as suma FROM movimientos as m, 
             concepto_movimiento as c, persona as p WHERE m.id_concepto_movimiento=c.id 
             AND c.id != 1 AND m.estado_movimiento = 'A CREDITO' AND m.id_persona=p.id AND m.estado =1";
            
            $consulta= Conexion::conect()->prepare($sql);
            $consulta->execute();
            $r = $consulta->fetch(PDO::FETCH_ASSOC);
            return $r;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function movimientosPagar($id){
        $sql= "SELECT c.categoria,m.total,p.nombre,m.id, CASE WHEN 
        (SELECT SUM(monto) FROM abono_movimiento WHERE id_movimiento=m.id) 
        IS NULL THEN (SELECT total FROM movimientos WHERE id=m.id) ELSE 
        ((SELECT total FROM movimientos WHERE id=m.id)-(SELECT SUM(monto) 
        FROM abono_movimiento WHERE id_movimiento=m.id)) END AS resto FROM 
        movimientos as m, concepto_movimiento as c, persona as p WHERE 
        m.id_concepto_movimiento=c.id AND c.id != 1 AND m.estado_movimiento = 'A CREDITO' 
        AND m.id_persona=p.id AND p.id=$id AND m.estado =1 GROUP BY m.id";

        $consulta= Conexion::conect()->prepare($sql);
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        return $consulta;
    }

    public function movimientosCobrar($id){
        $sql= "SELECT m.total,p.nombre,m.id, GROUP_CONCAT(d.cantidad ,' ',pr.nombre) 
        as productos, CASE WHEN (SELECT SUM(monto) FROM abono_movimiento WHERE id_movimiento=m.id) 
        IS NULL THEN (SELECT total FROM movimientos WHERE id=m.id) ELSE 
        ((SELECT total FROM movimientos WHERE id=m.id)-(SELECT SUM(monto) FROM abono_movimiento 
        WHERE id_movimiento=m.id)) END AS resto FROM movimientos as m, persona 
        as p, detalles_movimientos as d, productos as pr WHERE m.id_concepto_movimiento = 1 
        AND d.id_movimientos=m.id and d.id_producto=pr.id AND m.estado_movimiento = 'A CREDITO' 
        AND m.id_persona=p.id AND p.id=$id AND m.estado =1 GROUP BY pr.nombre,m.id";

        $consulta= Conexion::conect()->prepare($sql);
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        return $consulta ;
    }

    public function detallesPagar($id){
        try {
            $consulta= Conexion::conect()->prepare("SELECT c.categoria, m.fecha, m.total ,m.nombre 
            FROM movimientos as m, concepto_movimiento as c WHERE m.id=$id and 
            c.id=m.id_concepto_movimiento");
            $consulta->execute();
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            
            return $r;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function detallesCobrar($id){
        try {
            $consulta= Conexion::conect()->prepare("SELECT m.fecha, m.total ,p.nombre FROM
             movimientos as m, persona as p WHERE m.id=$id and m.id_persona=p.id");
            $consulta->execute();
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            return $r;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function detallesCobrarProd($id){
        try {
            $consulta= Conexion::conect()->prepare("SELECT p.nombre, p.precio_venta, d.cantidad,
             d.precio, m.id FROM movimientos AS m, detalles_movimientos as d, productos as p 
             WHERE m.id=$id AND d.id_movimientos=m.id and d.id_producto = p.id
            ");
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            $consulta->execute();
            return $consulta ;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    // public function abonar(deudasModel $p){
    //     try {
    //         if($p->getid_abono()){
    //             $consulta= Conexion::conect()->prepare("SELECT * FROM deudas WHERE id=?;");
    //             $consulta->execute(array($p->getid_abono()));
    //             $r=$consulta->fetch(PDO::FETCH_OBJ);
    //             $montoDeuda = $r->monto;
    //         }
    //         $montoTotal=$montoDeuda - $p->getid_abono();
    //         if ($montoTotal > 0) {
    //             $consulta="UPDATE deudas SET monto=? WHERE id=?;";
    //         }else{
    //             $consulta="UPDATE deudas SET estado=0 WHERE id=?;";
    //         }
            
    //         $consulta = Conexion::conect()->prepare($consulta);
    //         $execute = $consulta->execute(array(
    //             $montoTotal,$p->getid_abono()
    //         ));

    //         if ($execute) {
    //             $consulta="INSERT INTO abonos(
    //                 concepto , 
    //                 valor,
    //                 id_metodo_pago,
    //                 id_deuda)
    //             VALUES (?,?,?,?)";
    //             Conexion::conect()->prepare($consulta)->execute(array(
    //                 $p->getconcepto_abono(),
    //                 $p->getvalor_abono(),
    //                 $p->getmetodo_abono(),
    //                 $p->getid_abono()
    //             ));
    //         }
           
    //     } catch (Exception $e) {

    //         die($e->getMessage());
    //     }
    // }



    public function registrarAbono(deudasModel $p,$tipo){
        try{
            $consulta="INSERT INTO abonos(
                concepto, 
                valor,
                id_metodo_pago)
            VALUES (?,?,?)";
            $pdo = Conexion::conect();
            $execute=$pdo->prepare($consulta)->execute(array(
                $p->getconcepto_abono(),
                $p->getvalor_abono(),
                $p->getmetodo_abono()
            ));
            if ($execute) {
                $id_abono = $pdo->lastInsertId();
            }else{
                $lastInsertId = 0;
            }
            $this->calcularAbonos($p->getid_abono(),$id_abono,$p->getvalor_abono(),$tipo);
        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function consultarMov($id_mov){
        try{
            $consulta= Conexion::conect()->prepare("SELECT * FROM movimientos WHERE id=?;");
            $consulta->execute(array($id_mov));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            return  $r->total;
        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function totalAbonos($id_mov){
        try{
            $consulta1="SELECT am.id FROM abono_movimiento as am, abonos as a, movimientos as m WHERE
             m.id=$id_mov AND am.id_movimiento = m.id AND am.id_abono= a.id and am.estado =1";
            $consulta1= Conexion::conect()->prepare($consulta1);
            $consulta1->setFetchMode(PDO::FETCH_ASSOC);
            $consulta1->execute(array("1","1"));
            var_dump($consulta1->rowCount());
             if ($consulta1->rowCount() > 0) {
                
                $sql="SELECT SUM(am.monto) as suma FROM abono_movimiento as am, abonos as a, movimientos as
                m WHERE m.id=$id_mov AND am.id_movimiento = m.id AND am.id_abono= a.id";
                $sql = Conexion::conect()->prepare($sql);
                $sql->execute();
                $r=$sql->fetch(PDO::FETCH_OBJ);
    
                return $r->suma;  
            }else{
                return 0;
            }

            
        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function PagarDeuda($id_mov){
        try{
            $consult ="UPDATE movimientos SET estado_movimiento='PAGADO' WHERE id=?;";
            $consult = Conexion::conect()->prepare($consult);
            $execute = $consult->execute(array($id_mov));
        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function movAnterior($tipo){
        try{
            if ($tipo = "1") {
                $sql="SELECT m.id, MIN(m.fecha) FROM movimientos as m WHERE m.estado=1 AND
             m.estado_movimiento='A CREDITO' AND m.id_concepto_movimiento = 1";
            }else{
               $sql="SELECT m.id, MIN(m.fecha) FROM movimientos as m WHERE m.estado=1 AND
             m.estado_movimiento='A CREDITO' AND m.id_concepto_movimiento != 1"; 
            }
            
            $sql = Conexion::conect()->prepare($sql);
            $sql->execute();
            $r=$sql->fetch(PDO::FETCH_OBJ);
            return $r->id;
        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function calcularAbonos($id_mov,$idAbono,$montoAbono,$tipo){
        
        $totalMov = $this->consultarMov($id_mov);
        $totalAbonos = $this->totalAbonos($id_mov)+$montoAbono;
 
        $result=$totalMov - $totalAbonos;
        var_dump("resultado: ".$result);
        
        if ($result > 0) {
            try{
                var_dump("result > 0 : guardar: ".$montoAbono);
                $consulta="INSERT INTO abono_movimiento(
                    id_movimiento, 
                    id_abono,
                    monto,
                    estado)
                VALUES (?,?,?,?)";
                Conexion::conect()->prepare($consulta)->execute(array(
                    $id_mov,
                    $idAbono,
                    $montoAbono,
                    "1"
                ));
            } catch (Exception $e) {

                die($e->getMessage());
            }
        }elseif ($result == 0) {
            
            var_dump("result = 0 : guardar: ".$totalAbonos);
            $consulta="INSERT INTO abono_movimiento(
                id_movimiento, 
                id_abono,
                monto,
                estado)
            VALUES (?,?,?,?)";
            Conexion::conect()->prepare($consulta)->execute(array(
                $id_mov,
                $idAbono,
                $totalAbonos,
                "1"
            ));
            $this->PagarDeuda($id_mov);

        }elseif($result < 0){
            $total = $totalMov-$this->totalAbonos($id_mov);
            $result = $totalAbonos - $totalMov;
            $consulta="INSERT INTO abono_movimiento(
                id_movimiento, 
                id_abono,
                monto,
                estado)
            VALUES (?,?,?,?)";
            Conexion::conect()->prepare($consulta)->execute(array(
                $id_mov,
                $idAbono,
                $total,
                "1"
            ));
            $this->PagarDeuda($id_mov);
            $idMov = $this->movAnterior($tipo);
            try{

                $consulta="INSERT INTO abono_movimiento(
                    id_movimiento, 
                    id_abono,
                    monto,
                    estado)
                VALUES (?,?,?,?)";
                Conexion::conect()->prepare($consulta)->execute(array(
                    $idMov,
                    $idAbono,
                    $result,
                    "1"
                ));
            } catch (Exception $e) {

                die($e->getMessage());
            }

        }
        
        

    }
    
    public function eliminar($id){
        try {
            $estado=0;
            $consulta="UPDATE movimientos SET estado=? WHERE id=?;";
            Conexion::conect()->prepare($consulta)->execute(array($estado,$id));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

}
?>