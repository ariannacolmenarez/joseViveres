<?php

class gastosModel extends Conexion{
    private $id;
    private $nombre;
    private $monto;
    private $fecha;
    private $hora;
    private $concepto;
    private $estado_movimiento;
    private $id_metodo_pago;
    private $id_deuda;
    private $id_persona;
    

    public function __construct(){
        parent::conect();
    }

    public function getid(){
        return $this->id;
    }

    public function setid( $id){
        $this->id=$id;
    }

    public function gethora(){
        return $this->hora;
    }

    public function sethora( $hora){
        $this->hora=$hora;
    }

    public function getconcepto(){
        return $this->concepto;
    }

    public function setconcepto( $concepto){
        $this->concepto=$concepto;
    }


    public function getnombre(){
        return $this->nombre;
    }

    public function setnombre( $nombre){
        $this->nombre=$nombre;
    }

    public function getmonto(){
        return $this->monto;
    }

    public function setmonto( $monto){
        $this->monto=$monto;
    }

    public function getfecha(){
        return $this->fecha;
    }

    public function setfecha( $fecha){
        $this->fecha=$fecha;
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

    public function listarCategorias(){
        try {
            $consulta= Conexion::conect()->prepare("SELECT * FROM concepto_movimiento WHERE estado !=0 AND categoria != 'VENTA'");
            $consulta->execute();
            return $consulta->fetchALL(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function listarProveedores(){
        try {
            $consulta= Conexion::conect()->prepare("SELECT * FROM persona WHERE estado !=0 AND id_tipo_persona = 1");
            $consulta->execute();
            return $consulta->fetchALL(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function registrar(gastosModel $p){
        try {
            
            $consulta="INSERT INTO movimientos(
                nombre , 
                total,
                fecha,
                hora,
                estado_movimiento,
                estado,
                id_concepto_movimiento,
                id_metodo_pago,
                id_persona)
            VALUES (?,?,?,?,?,?,?,?,?)";
            Conexion::conect()->prepare($consulta)->execute(array(
                $p->getnombre(),
                $p->getmonto(),
                $p->getfecha(),
                $p->gethora(),
                $p->getestado_movimiento(),
                "1",
                $p->getconcepto(),
                $p->getid_metodo_pago(),
                $p->getid_persona(),
            ));

        } catch (Exception $e) {

            die($e->getMessage());
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