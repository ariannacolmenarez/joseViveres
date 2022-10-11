<?php

class usuariosModel extends Conexion{
    private $id;
    private $nombre;
    private $correo;
    private $rol_usuario;
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

    public function getrol_usuario(){
        return $this->rol_usuario;
    }

    public function setrol_usuario( $rol_usuario){
        $this->rol_usuario=$rol_usuario;
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

    public function listarRoles(){
        try {
            $consulta= Conexion::conect()->prepare("SELECT * FROM rol WHERE estado !=0");
            $consulta->execute();
            return $consulta->fetchALL(PDO::FETCH_OBJ);

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
            $p->setrol_usuario($r->id_rol);
            
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
                $p->getrol_usuario(),
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
                $p->getrol_usuario(),
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

            $consulta="SELECT * FROM usuarios WHERE estado =? AND nombre LIKE '%$busqueda%' 
            OR correo LIKE '%$busqueda%'";

            $consulta= Conexion::conect()->prepare($consulta);
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            $consulta->execute(array("1"));
            return $consulta;

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function verificarUsuario(){
        try {
            $nombre = $this->nombre;
            $sql="SELECT * FROM usuarios WHERE nombre = ? OR correo = ? and estado = '1';";
            $consulta = Conexion::conect()->prepare($sql);
            $consulta->execute(array($nombre,$nombre));
            $result = $consulta->fetch(PDO::FETCH_OBJ);
            return $result;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


}

?>