<?php

class usuariosModel extends Conexion{
    private $id;
    private $nombre;
    private $correo;
    private $contraseña;

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

    public function getcorreo(){
        return $this->correo;
    }

    public function setcorreo( $correo){
        $this->correo=$correo;
    }

    public function getcontraseña(){
        return $this->contraseña;
    }

    public function setcontraseña( $contraseña){
        $this->contraseña=$contraseña;
    }

    public static function listar(){
        try {
             
                $sql= "SELECT * FROM usuarios WHERE estado !=0 ";
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
            $consulta= Conexion::conect()->prepare("SELECT * FROM usuarios WHERE id=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p= new usuariosModel();
            $p->setid($r->id);
            $p->setnombre($r->nombre);
            $p->setcorreo($r->correo);
            $p->setcontraseña($r->contraseña);
            
            return $p;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function guardar(usuariosModel $p){
        try {
            
            $consulta="UPDATE usuarios SET 
                nombre=?,
                correo=?,
                contraseña=?,
                estado=?,
                id_rol=?
                WHERE id=?;
            
            ";
            Conexion::conect()->prepare($consulta)->execute(array(
                $p->getnombre(),
                $p->getcorreo(),
                $p->getcontraseña(),
                "1",
                "1",
                $p->getid(),

            ));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function registrar(usuariosModel $p){
        try {
            
            $consulta="INSERT INTO usuarios(
                nombre , 
                correo,
                contraseña,
                estado,
                id_rol)
            VALUES (?,?,?,?,?)";
            Conexion::conect()->prepare($consulta)->execute(array(
                $p->getnombre(),
                $p->getcorreo(),
                $p->getcontraseña(),
                "1",
                "1",
            ));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function eliminar($id){
        try {
            $estado=0;
            $consulta="UPDATE usuarios SET estado=? WHERE id=?;";
            Conexion::conect()->prepare($consulta)->execute(array($estado,$id));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function buscar($busqueda){
        try {

            $consulta="SELECT * FROM persona WHERE estado =? AND id_tipo_persona=? AND nombre LIKE '%$busqueda%' 
            OR telefono LIKE '%$busqueda%'";

            $consulta= Conexion::conect()->prepare($consulta);
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            $consulta->execute(array("1","2"));
            return $consulta;

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }


}

?>