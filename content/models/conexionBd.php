<?php 

	class Conexion{

	
		public static function conect(){
			
			$connectionString = "mysql:host="._DB_HOST_.";dbname="._DB_WEB_.";.DB_CHARSET.";
			try{
				$conect = new PDO($connectionString, _DB_USER_, _DB_PASSWORD_);
				$conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//$conect->exec("SET @usuario_id = 1;");
				return $conect;
			}catch(PDOException $e){
				$conect = 'Error de conexión';
				echo "ERROR: " . $e->getMessage();
			}
		}
		
	}

 ?>