<?php

class gastosController extends Autoload {
  private $model;

    public function __construct(){
        parent::__construct();
        $this->model = new gastosModel;

    }

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

    public function  listarCategorias(){

      $respuesta = $this->model->listarCategorias();

      foreach ($respuesta as $r){
        echo'  
        <option class="p-5" value="'.$r->id.'">'.$r->categoria.'</option>';
      };
  
    }

    public function  listarProveedores(){

      $respuesta = $this->model->listarProveedores();

      foreach ($respuesta as $r){
        echo'  
        <option class="p-5" value="'.$r->id.'">'.$r->nombre.'</option>';
      };

    }

    function registrar(){
        
      if (!empty( $_POST["monto"] && $_POST["categoria"] && $_POST["fecha"] && $_POST["hora"] && $_POST['estado'])) {

        $p=new gastosModel();

        $p->setmonto($_POST['monto']);
        $p->setfecha($_POST['fecha']);
        $p->sethora($_POST['hora']);
        $p->setestado_movimiento($_POST['estado']);
        $p->setid_metodo_pago($_POST['metodo']);
        if($_POST['proveedor'] == ""){
            $proveedor=NULL;
        }else{
            $proveedor=$_POST['proveedor'];
        }
        $p->setid_persona($proveedor);
        $p->setconcepto($_POST['categoria']);
        $p->setnombre($_POST['nombre']);
        $p->setid_deuda(NULL);

        $this->model->registrar($p);
    
      }
    }

    public function eliminar(){
			$this->model->eliminar($_POST['id']);
   	}


}

?>