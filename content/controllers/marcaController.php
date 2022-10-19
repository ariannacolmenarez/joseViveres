<?php

class marcaController extends Autoload {
  private $model;

  public function __construct(){
        parent::__construct();
        $this->model = new marcaModel;

    }

    public function  listar(){
      $data = '';

      $respuesta = $this->model->listar();

    	foreach ($respuesta as $regist) 
    	{
    		$data .= '<a type="button" onclick="editarMarca('.$regist['id'].');" class="list-group-item text-dark list-group-item-action p-3">
        <div class="row">
          <div class="col">'.$regist['nombre'].'</div>
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
        "nombre"=>$resp->getnombre(),
        "id"=>$resp->getid(),
      ];
      echo json_encode($resultados);
      
    }

    public function guardar(){
      if (!empty($_POST['id'] && $_POST['nombre'] )) {

				$p=new marcaModel();

				$p->setid($_POST['id']);
        $p->setnombre($_POST['nombre']);

				$this->model->guardar($p);
				
			}
    }

    public function registrar(){
        if (!empty( $_POST['nombre'])) {

            $p=new marcaModel();
            $p->setnombre($_POST['nombre']);

            $resp=$this->model->registrar($p);
            echo json_encode($resp);
		    }
    }

     public function eliminarMarca($id){
			$this->model->eliminarMarca($id);
   	}

    public function buscarMarca(){
      $data = '';
      $respuesta = $this->model->buscarMarca($_POST["busqueda"]);
      if ($respuesta->rowCount() > 0) {
        foreach ($respuesta as $regist) {
          $data .= '<a type="button" onclick="editarCat('.$regist['id'].');" class="list-group-item text-dark list-group-item-action p-3">
            <div class="row">
              <div class="col">'.$regist['nombre'].'</div>
              <div class="col text-end"><i class="ti-angle-right"></i></div>
            </div> 
          </a>';
        };
      }else {$data .= '<div class="row align-items-center">
                        <div class="col text-secondary text-center">No hay registros</div>
                      </div>';
      }
      $data .= '';
      echo $data;
    }

}

?>