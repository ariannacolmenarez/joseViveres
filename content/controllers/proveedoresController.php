<?php

class proveedoresController extends Autoload {

  function __construct(){
        parent::__construct();
        $this->model = new proveedoresModel;

    }

    static function  listar(){
      $data = '<div class="list-group list-group-flush mt-2" id="proveedor">';

            $respuesta = proveedoresModel::listar();

    	$number = 1;
    	foreach ($respuesta as $regist) 
    	{
    		$data .= '<a onclick="consultar('.$regist["id"].');" type="button" class="list-group-item text-dark list-group-item-action py-3">
        <div class="row align-items-center">
          <div class="col-1 text-secondary"><i class="ti-user fa-2x"></i></div>
          <div class="col px-4">'.$regist['nombre'].' <small class="text-muted">'.$regist['telefono'].'</small></div>
          <div class="col text-end"><i class="ti-marker-alt "></i></div>
        </div> 
      </a>';
    	};

    $data .= '</div>';

    echo $data;

    }

    function consultar($id){
      $proveedor = new proveedoresModel();
      $resp = $proveedor->consultar($id);

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

    function guardar(){
      if (!empty($_POST['id'] && $_POST['nombre'] && $_POST['nro_doc'] && $_POST['tipo_doc'] )) {

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



}

?>