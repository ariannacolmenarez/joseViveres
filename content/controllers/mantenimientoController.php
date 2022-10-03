<?php 

	class mantenimientoController extends AutoLoad{
		private $model;

		public function __construct(){
			parent::__construct();
			$this->model=new mantenimientoModel;
			
		}

		public function mantenimiento(){
			$data['page_tag'] = "Mantenimiento | Market MP";
			$data['page_title'] = "Mantenimiento del sistema";
			parent::getView("mantenimiento", $data);
		}

		public function respaldo(){
			$this->model->respaldo();
			header("location:"._DIRECTORY_."mantenimiento");
		}

		public function form(){
			
			parent::getView($this,"restaurar", "");
		}

		public function select(){
			$directorio = "./database/";
			$dir=opendir($directorio);
			while (($file = readdir($dir))!== false)
			 {
			   if ($file != '.' && $file != '..')       
				   echo '<option value="'.$directorio.$file.'">'.$directorio.$file.'</option>';      
			 }	
	    }

	    public function restaurar(){
			
			$this->model->restaurar();
			header("location:"._DIRECTORY_."mantenimiento");
		}
	
	}




?>
