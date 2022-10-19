<?php

class categoriasController extends Autoload {
  private $model;

  public function __construct(){
        parent::__construct();
        $this->model = new categoriasModel;

    }

    public function  listar(){
      $data = '';

      $respuesta = $this->model->listar();

    	foreach ($respuesta as $regist) 
    	{
    		$data .= '<a type="button" onclick="editarCat('.$regist['id'].');" class="list-group-item text-dark list-group-item-action p-3">
        <div class="row">
          <div class="col">'.$regist['categoria'].'</div>
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

    public function listarProdCat($id){
         $respuesta = $this->model->listarProdCat($id);
         
         $data = '<div class="row align-items-end mt-2">';

        foreach ($respuesta as $regist) 
        {
            $data .= '<div class="col-2">
            <div style="width: 3rem;">
              <img src="';
            if($regist['url_img'] != NULL){
                $data .= $regist['url_img'];
            } else{
                $data .= "assets/images/MP.png";
            } 
            $data.='" alt="25%" class="img-fluid">
              </div>
            </div>
            <div class="col-7">
              <div class="row">
                <div class="col">'.$regist['nombre'].' '.$regist['marca'].'</div>
              </div>
              <div class="row mt-2">
                <div class="col-12"><h6>'.$regist["volumen"].$regist["unidad_medida"].' * '.$regist["unidades"].' UND</h6></div>
              </div>
            </div>
              <div class="col-3 text-end">
                <div class="btn btn-outline-danger btn-rounded " onclick="eliminarProd('.$regist['id'].','.$id.')" >
                  Eliminar
                </div>
              </div>
              <hr>';
        };

      $data .= '</div>';

      echo json_encode($data);
    }

    public function guardar(){
      if (!empty($_POST['id'] && $_POST['nombre'] )) {

				$p=new categoriasModel();

				$p->setid($_POST['id']);
        $p->setnombre($_POST['nombre']);

				$this->model->guardar($p);
				
			}
    }

    public function registrar(){
        if (!empty( $_POST['nombre'])) {

            $p=new categoriasModel();
            $p->setnombre($_POST['nombre']);

            $resp=$this->model->registrar($p);
            echo json_encode($resp);
		    }
    }

    public function eliminarProd($id){
			$this->model->eliminarProd($id);
   	}

     public function eliminarCat($id){
			$this->model->eliminarCat($id);
   	}

    public function buscarCat(){
      $data = '';
      $respuesta = $this->model->buscarCat($_POST["busqueda"]);
      if ($respuesta->rowCount() > 0) {
        foreach ($respuesta as $regist) {
          $data .= '<a type="button" onclick="editarCat('.$regist['id'].');" class="list-group-item text-dark list-group-item-action p-3">
            <div class="row">
              <div class="col">'.$regist['categoria'].'</div>
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