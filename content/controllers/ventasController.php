<?php

class ventasController extends Autoload {
  private $model;

    public function __construct(){
        parent::__construct();
        $this->model = new ventasModel;

    }

    public function ventas(){
        $data['page_tag'] = "Ventas | Market MP";
        $data['page_title'] = "Ventas";
        parent::getView("ventas", $data);
        
    }

    public function  listar(){

      $data = '<div class="row row-cols-1 row-cols-lg-5 row-cols-sm-4 g-3 m-0">';

      $respuesta = $this->model->listar($_POST['opcion']);

    	foreach ($respuesta as $regist) {

    		$data .= '<div class="col p-1 ">
          <div class="card h-100">
              <a onclick="agg('.$regist["id"].',1);" style="position: absolute;" class="btn btn-warning btn-xs">
              <i class="ti-plus"></i>
              </a>
              <img src="./assets/images/MP.png" class="p-3 card-img-top " alt="...">
              <div class="card-body text-center">
                  <h6 class="card-title text-success">'.$regist["nombre"].'</h6>
                  <p class="card-text">'.$regist["precio_venta"].'BS</p>
                  <h6 class="text-muted">'.$regist["cantidad"].'<small> disponible</small></h6>                            
              </div>
          </div>
        </div>';
    	};

      $data .= '</div>';

      echo json_encode($data);
    }

    function agg(){

      $resp = $this->model->consultar($_POST["id"]);

      $resultados [] = [
        "id"=>$resp->getid_prod(),
        "nombre"=>$resp->getnombre_prod(),
        "precio_venta"=>$resp->getprecio_venta_prod(),
        "cantidad"=>$resp->getcantidad_prod()
      ];

      echo json_encode($resultados);

    }

    function registrar(){
        var_dump($_POST['parametros']['cliente']);
      if (!empty( $_POST['parametros']["total"] && $_POST['parametros']["fecha"] && $_POST['parametros']['estado'])) {

          $p=new ventasModel();

          $p->settotal($_POST['parametros']['total']);
          $p->setfecha(strtoupper($_POST['parametros']['fecha']));
          $p->setestado_movimiento(strtoupper($_POST['parametros']['estado']));
          $p->setid_metodo_pago(strtoupper($_POST['parametros']['metodo']));
          if($_POST['parametros']['cliente'] == ""){
              $cliente=NULL;
          }else{
              $cliente=$_POST['parametros']['cliente'];
          }
          $p->setid_persona($cliente);
          $p->setproductos($_POST['data']);

          $this->model->registrar($p);
      
      }
    }

    public function  listarClientes(){

      $respuesta = $this->model->listarClientes();

      foreach ($respuesta as $r){
        echo'  
        <option value="'.$r->id.'">'.$r->nombre.'</option>';
      };
      var_dump($respuesta);

    }

    public function  listarCategorias(){

      $respuesta = $this->model->listarCategorias();

      foreach ($respuesta as $r){
        echo'  
        <option value="'.$r->id.'">'.$r->categoria.'</option>';
      };
      var_dump($respuesta);

    }

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