<?php

class presentacionController extends Autoload {
  private $model;

  public function __construct(){
        parent::__construct();
        $this->model = new presentacionModel;

    }

    public function  listar(){
      $data = '';

      $respuesta = $this->model->listar();

    	foreach ($respuesta as $regist) 
    	{
    		$data .= '<a type="button" onclick="editarPresentacion('.$regist['id'].');" class="list-group-item text-dark list-group-item-action p-3">
        <div class="row">
          <div class="col">'.$regist['volumen'].$regist['unidad_medida'].' * '.$regist['unidades'].' Und</div>
          <div class="col text-end"><i class="ti-angle-right"></i></div>
        </div> 
      </a>';
    	};

    $data .= '';

    echo $data;

    }

    public function consultar($id){
      
      $resp = $this->model->consultar($id);

      $resultados [] = [
        "unidades"=>$resp->getunidades(),
        "medidas"=>$resp->getmedidas(),
        "volumen"=>$resp->getvolumen(),
        "id"=>$resp->getid(),
      ];
      echo json_encode($resultados);
      
    }

    public function guardar(){
      if (!empty($_POST['id'] && $_POST['volumen']&& $_POST['medidas']&& $_POST['unidades'] )) {

				$p=new presentacionModel();

				$p->setid($_POST['id']);
        $p->setvolumen($_POST['volumen']);
        $p->setmedidas($_POST['medidas']);
        $p->setunidades($_POST['unidades']);

				$this->model->guardar($p);
				
			}
    }

    public function registrar(){
        if (!empty( $_POST['volumen']&& $_POST['medidas']&& $_POST['unidades'])) {

            $p=new presentacionModel();
            $p->setvolumen($_POST['volumen']);
            $p->setmedidas($_POST['medidas']);
            $p->setunidades($_POST['unidades']);

            $resp=$this->model->registrar($p);
            echo json_encode($resp);
		    }
    }

     public function eliminarPresentacion($id){
			$this->model->eliminarPresentacion($id);
   	}

    

}

?>