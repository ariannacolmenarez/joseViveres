<?php

class usuariosController extends Autoload {
    private $model;

    public function __construct(){
        parent::__construct();
        $this->model = new usuariosModel;

    }

    public function  listar(){
        $data = '<div class="list-group list-group-flush mt-2" id="usuarios2">';

        $respuesta = $this->model->listar();

    	foreach ($respuesta as $regist) {
    		$data .= '<a onclick="consultarusuarios('.$regist["id"].');" type="button" class="list-group-item text-dark list-group-item-action py-3">
                            <div class="row align-items-center">
                            <div class="col-1 text-secondary"><i class="ti-user fa-2x"></i></div>
                            <div class="col px-4">'.$regist['nombre'].' <small class="text-muted">'.$regist['correo'].'</small></div>
                            <div class="col text-end"><i class="ti-marker-alt "></i></div>
                            </div> 
                        </a>';
    	};

        $data .= '</div>';

        echo $data;

    }

    public function consultar($id){
      
        $resp = $this->model->consultar($id);

        $resultados [] = [
            "nombre"=>$resp->getnombre(),
            "correo"=>$resp->getcorreo(),
            "contraseña"=>$resp->getcontraseña(),
            "id"=>$resp->getid(),
        ];
        echo json_encode($resultados);
      
    }

    public function guardar(){
        if (!empty($_POST['id'] && $_POST['nombre1'] && $_POST['correo'] )) {

			$p=new usuariosModel();

			$p->setid($_POST['id']);
            $p->setnombre($_POST['nombre1']);
            $p->setcorreo($_POST['correo']);
            $p->setcontraseña($_POST['contraseña']);

			$this->model->guardar($p);
				
		}
    }

    public function registrar(){
        if (!empty( $_POST['nombre'] && $_POST['correo'])) {

		    $p=new usuariosModel();

            $p->setnombre($_POST['nombre']);
            $p->setcorreo($_POST['correo']);
            $p->setcontraseña($_POST['contraseña']);

			$this->model->registrar($p);
				
		}
    }

    public function eliminar(){
			$this->model->eliminar($_POST['id']);
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