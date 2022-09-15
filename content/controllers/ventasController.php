<?php

class ventasController extends Autoload {
  private $model;

    public function __construct(){
        parent::__construct();
        $this->model = new ventasModel;

    }

    public function ventas(){
        parent::getView("ventas","");
    }

    public function  listar(){
      $data = '<div class="row row-cols-1 row-cols-lg-5 row-cols-sm-4 g-3 m-0">';

            $respuesta = $this->model->listar();

    	foreach ($respuesta as $regist) 
    	{
    		$data .= '<div class="col p-1 ">
                        <div class="card h-100">
                            <a onclick="agg('.$regist["id"].');" style="position: absolute;" class="btn btn-warning btn-xs">
                            <i class="ti-plus"></i>
                            </a>
                            <img src="./assets/images/MP.png" class="p-3 card-img-top " alt="...">
                            <div class="card-body text-center">
                                <h6 class="card-title text-success">'.$regist["nombre"].'</h6>
                                <p class="card-text">'.$regist["precio_venta"].'</p>
                                <h6 class="text-muted">'.$regist["cantidad"].'</h6>                            
                            </div>
                        </div>
                      </div>';
    	};

    $data .= '</div>';

    echo json_encode($data);

    }

    // function consultar($id){
    //   $proveedor = new proveedoresModel();
    //   $resp = $proveedor->consultar($id);

    //   $resultados [] = [
    //     "nombre"=>$resp->getnombre(),
    //     "tipo_doc"=>$resp->gettipoDoc(),
    //     "nro_doc"=>$resp->getnroDoc(),
    //     "telefono"=>$resp->gettelefono(),
    //     "comentario"=>$resp->getcomentario(),
    //     "id"=>$resp->getid(),
    //   ];
    //   echo json_encode($resultados);

      
      
    // }

    // function guardar(){
    //   if (!empty($_POST['id'] && $_POST['nombre'] && $_POST['telefono'] )) {

	// 			$p=new proveedoresModel();

	// 			$p->setid($_POST['id']);
    //     $p->setnombre(strtoupper($_POST['nombre']));
    //     $p->setnroDoc(strtoupper($_POST['nro_doc']));
    //     $p->settipoDoc(strtoupper($_POST['tipo_doc']));
    //     $p->setcomentario(strtoupper($_POST['comentario']));
    //     $p->settelefono(strtoupper($_POST['telefono']));

	// 			$this->model->guardar($p);
				
	// 		}
    // }

    // function registrar(){
    //   if (!empty( $_POST['nombre'] && $_POST['telefono'])) {

	// 			$p=new proveedoresModel();

    //     $p->setnombre(strtoupper($_POST['nombre']));
    //     $p->setnroDoc(strtoupper($_POST['nro_doc']));
    //     $p->settipoDoc(strtoupper($_POST['tipo_doc']));
    //     $p->setcomentario(strtoupper($_POST['comentario']));
    //     $p->settelefono(strtoupper($_POST['telefono']));

	// 			$this->model->registrar($p);
				
	// 		}
    // }

    // public function eliminar(){
	// 		$this->model->eliminar($_POST['id']);
   	// }

    // public function buscar(){
    //   $data = '<div class="list-group list-group-flush mt-2" id="proveedor">';
    //   $respuesta = proveedoresModel::buscar($_POST["busqueda"]);
    //   if ($respuesta->rowCount() > 0) {
    //     foreach ($respuesta as $regist) {
    //         $data .= '<a onclick="consultar('.$regist["id"].');" type="button" class="list-group-item text-dark list-group-item-action py-3">
    //                     <div class="row align-items-center">
    //                       <div class="col-1 text-secondary"><i class="ti-user fa-2x"></i></div>
    //                       <div class="col px-4">'.$regist['nombre'].' <small class="text-muted">'.$regist['telefono'].'</small></div>
    //                       <div class="col text-end"><i class="ti-marker-alt "></i></div>
    //                     </div> 
    //                   </a>';
    //     };
    //   }else {$data .= '<div class="row align-items-center">
    //                     <div class="col text-secondary text-center">No hay registros</div>
    //                   </div>';
    //   }
    //   $data .= '</div>';

    //   echo $data;
    // }



}

?>