<?php

class proveedoresController extends Autoload {
  private $model;

  public function __construct(){
        parent::__construct();
        $this->model = new proveedoresModel;

    }

    public function  listar(){
      $data = '<div class="list-group list-group-flush mt-2" id="proveedor">';

      $respuesta = $this->model->listar();
      if(in_array("Consultar Proveedores", $_SESSION['permisos'])){ 
        foreach ($respuesta as $regist) 
        {
          $data .= '<a ';
          if(in_array("Modificar Proveedores", $_SESSION['permisos'])){
             $data .= 'onclick="consultarproveedores('.$regist["id"].');"';
           }
           $data .=' type="button" class="list-group-item text-dark list-group-item-action py-3">
          <div class="row align-items-center">
            <div class="col-1 text-secondary"><i class="ti-user fa-2x"></i></div>
            <div class="col px-4">'.$regist['nombre'].' <small class="text-muted">'.$regist['telefono'].'</small></div>
            <div class="col text-end"><i class="ti-marker-alt "></i></div>
          </div> 
        </a>';
        };
      }

    $data .= '</div>';

    echo $data;

    }

    public function consultar($id){
      
      $resp = $this->model->consultar($id);

      $resultados [] = [
        "nombre"=>$resp->getnombre(),
        "tipo_doc"=>$resp->gettipoDoc(),
        "nro_doc"=>$resp->getnroDoc(),
        "telefono"=>$resp->gettelefono(),
        "comentario"=>$resp->getcomentario(),
        "id"=>$resp->getid(),
      ];
      echo json_encode($resultados);
      
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
      if (!empty( $_POST['nombre'] && $_POST['telefono'])) {

				$p=new proveedoresModel();

        $p->setnombre($_POST['nombre']);
        $p->setnroDoc($_POST['nro_doc']);
        $p->settipoDoc($_POST['tipo_doc']);
        $p->setcomentario($_POST['comentario']);
        $p->settelefono($_POST['telefono']);

				$resp=$this->model->registrar($p);
				echo json_encode($resp);
			}
    }

    public function eliminar(){
			$this->model->eliminar($_POST['id']);
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