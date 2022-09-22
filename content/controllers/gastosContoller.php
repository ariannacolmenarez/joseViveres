<?php

class gastosController extends Autoload {
  private $model;

    public function __construct(){
        parent::__construct();
        $this->model = new gastosModel;

    }

    // public function ventas(){
    //     $data['page_tag'] = "Ventas | Market MP";
    //     $data['page_title'] = "Ventas";
    //     parent::getView("ventas", $data);
        
    // }

    public function  consultarCategorias(){
      $data = '<select class="form-select  mb-3 shadow-none" aria-label=".form-select example">
                    <option selected disabled>Selecciona una categoría</option>';

            $respuesta = $this->model->listar();

    	foreach ($respuesta as $regist) 
    	{
    		$data .= '<option value="'.$regist["id"].'">'.$regist["categoria"].'</option>';
    	};

    $data .= '</select>';

    echo json_encode($data);

    }

    // function agg(){
    //   $resp = $this->model->consultar($_POST["id"]);

    //   $resultados [] = [
    //     "id"=>$resp->getid_prod(),
    //     "nombre"=>$resp->getnombre_prod(),
    //     "precio_venta"=>$resp->getprecio_venta_prod(),
    //     "cantidad"=>$resp->getcantidad_prod()
    //   ];
    //   echo json_encode($resultados);

      
      
    // }

    // function registrar(){
      
    //   var_dump(json_decode($_POST["array"]));

        
        // if (!empty( $_POST['total'] && $_POST['fecha'] && $_POST['estado_movimiento'])) {

        //     $p=new ventasModel();

        //     $p->settotal($_POST['total']);
        //     $p->setfecha(strtoupper($_POST['fecha']));
        //     $p->setestado_movimiento(strtoupper($_POST['estado_movimiento']));
        //     $p->setid_metodo_pago(strtoupper($_POST['metodo']));
        //     if($_POST['cliente'] == ""){
        //         $cliente=NULL;
        //     }else{
        //         $cliente=$_POST['cliente'];
        //     }
        //     $p->setid_persona($cliente);
        //     //$p->setproductos($_POST["productos"]);

        //     $this->model->registrar($p);
				
		// }
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