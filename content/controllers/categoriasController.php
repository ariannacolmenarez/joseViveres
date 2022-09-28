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
            <div class="col-8">
              <div class="row">
                <div class="col">'.$regist['nombre'].'</div>
              </div>
              <div class="row mt-2">
                <div class="col-8"><h6>'.$regist['cantidad'].'<small>disponible</small></h6></div>
                <div class="col-4 text-end"><h6>'.$regist['precio_venta'].'</h6> </div>
              </div>
            </div>
              <div class="col-2 text-end">
                <button class="btn btn-outline-danger btn-rounded btn-icon" onclick="eliminarProd('.$regist['id'].');">
                  <i class="ti-trash"></i>
                </button>
              </div>
              <hr>';
        };

      $data .= '</div>';

      echo json_encode($data);
    }

    public function guardar(){
      if (!empty($_POST['id'] && $_POST['nombre'] && $_POST['telefono'] )) {

				$p=new proveedoresModel();

				$p->setid($_POST['id']);
        $p->setnombre(strtoupper($_POST['nombre']));
        $p->setnroDoc(strtoupper($_POST['nro_doc']));
        $p->settipoDoc(strtoupper($_POST['tipo_doc']));
        $p->setcomentario(strtoupper($_POST['comentario']));
        $p->settelefono(strtoupper($_POST['telefono']));

				$this->model->guardar($p);
				
			}
    }

    public function registrar(){
        if (!empty( $_POST['nombre'])) {

            $p=new categoriasModel();
            $p->setnombre($_POST['nombre']);

            $this->model->registrar($p);
				
		    }
    }

    public function eliminarProd(){
			$this->model->eliminarProd($_POST['id']);
   	}

    public function buscar(){
      $data = '<div class="list-group list-group-flush mt-2" id="proveedor">';
      $respuesta = $this->model->buscar($_POST["busqueda"]);
      if ($respuesta->rowCount() > 0) {
        foreach ($respuesta as $regist) {
            $data .= '<a onclick="consultarproveedores('.$regist["id"].');" type="button" class="list-group-item text-dark list-group-item-action py-3">
                        <div class="row align-items-center">
                          <div class="col-1 text-secondary"><i class="ti-user fa-2x"></i></div>
                          <div class="col px-4">'.$regist['nombre'].' <small class="text-muted">'.$regist['telefono'].'</small></div>
                          <div class="col text-end"><i class="ti-marker-alt "></i></div>
                        </div> 
                      </a>';
        };
      }else {$data .= '<div class="row align-items-center">
                        <div class="col text-secondary text-center">No hay registros</div>
                      </div>';
      }
      $data .= '</div>';

      echo $data;
    }



}

?>