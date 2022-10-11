<?php

class clientesController extends Autoload {
    private $model;

    public function __construct(){
        parent::__construct();
        $this->model = new clientesModel;

    }

    public function  listar(){
        $data = '<div class="list-group list-group-flush mt-2" id="cliente">';

        $respuesta = $this->model->listar();
        if(in_array("Consultar Clientes", $_SESSION['permisos'])){ 
            foreach ($respuesta as $regist) {
                $data .= '<a ';
                if(in_array("Consultar Clientes", $_SESSION['permisos'])){ 
                    $data .= 'onclick="consultarclientes('.$regist["id"].');"';
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
        if (!empty($_POST['idcliente'] && $_POST['nombrecliente'] && $_POST['telefonocliente'] )) {

			$p=new clientesModel();

			$p->setid($_POST['idcliente']);
            $p->setnombre($_POST['nombrecliente']);
            $p->setnroDoc($_POST['nro_doccliente']);
            $p->settipoDoc($_POST['tipo_doccliente']);
            $p->setcomentario($_POST['comentariocliente']);
            $p->settelefono($_POST['telefonocliente']);

			$this->model->guardar($p);
				
		}
    }

    public function registrar(){
        if (!empty( $_POST['nombrecliente'] && $_POST['telefonocliente'])) {

		    $p=new clientesModel();

            $p->setnombre($_POST['nombrecliente']);
            $p->setnroDoc($_POST['nro_doccliente']);
            $p->settipoDoc($_POST['tipo_doccliente']);
            $p->setcomentario($_POST['comentariocliente']);
            $p->settelefono($_POST['telefonocliente']);

			$resp=$this->model->registrar($p);
			echo json_encode($resp);
		}
    }

    public function eliminar(){
			$this->model->eliminar($_POST['idcliente']);
   	}

    public function buscar(){
        $data = '<div class="list-group list-group-flush mt-2" id="cliente">';
        $respuesta = $this->model->buscar($_POST["busqueda"]);
        if ($respuesta->rowCount() > 0) {
            foreach ($respuesta as $regist) {
                $data .= '<a onclick="consultarclientes('.$regist["id"].');" type="button" class="list-group-item text-dark list-group-item-action py-3">
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