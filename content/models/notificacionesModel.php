<?php 
	
	class notificacionesModel extends Conexion
	{
	
		public function __construct(){
			 parent::conect();
		}

		public static function listar($limit){
			try {
					$sql= "SELECT * FROM notificaciones WHERE estado = 1 ORDER BY created_at DESC LIMIT $limit";
					$consulta= parent::conect()->prepare($sql);
					$consulta->execute();
					return $consulta->fetchALL(PDO::FETCH_OBJ);
	
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

		public function eliminar($id){
			try {
            	$consulta="UPDATE notificaciones SET estado=0 WHERE id=?;";
				parent::conect()->prepare($consulta)->execute(array($id));
				return true;
			} catch (Exception $e) {
				return false;
			}
		}

		public function registrar(){
			try {
				
				
				$consulta='SELECT * FROM ( SELECT m.id, m.fecha,m.total,p.nombre,c.categoria, DATEDIFF(NOW(), fecha) diferencia FROM movimientos as m,persona as p, concepto_movimiento as c WHERE c.id=m.id_concepto_movimiento and m.id_persona = p.id and m.estado = 1 and m.estado_movimiento = "A CREDITO" ) T WHERE T.diferencia >= 30 ORDER by T.id';
				$consulta= parent::conect()->prepare($consulta);
				$consulta->execute();
				$p = $consulta->fetchALL(PDO::FETCH_OBJ);
					
					foreach ($p as $row) {
						var_dump($row);
						$titulo = $row->nombre." tiene una dueda atrasada";
						$mensaje = "la deuda es del ".$row->fecha." por ".$row->total." bs";
						$estado = 1;
					
						$stmt = Conexion::conect()->prepare('INSERT INTO notificaciones(titulo,mensaje,estado)
												VALUES(:titulo, :mensaje, :estado);
											');
					
						$stmt->execute([':titulo' => $titulo,
										':mensaje' => $mensaje,
										':estado' => $estado
										]);
	
					}
				
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}
	
		
	}

?>