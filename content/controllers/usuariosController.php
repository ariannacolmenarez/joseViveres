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

        if(in_array("Consultar Usuarios", $_SESSION['permisos'])){

            foreach ($respuesta as $regist) {
                $data .= '<a';
                if(in_array("Modificar Usuarios", $_SESSION['permisos'])){ 
                    $data.=' onclick="editarUsuarios('.$regist["id"].');"';
                }
                $data.='type="button" class="list-group-item text-dark list-group-item-action py-3">
                                <div class="row align-items-center">
                                <div class="col-1 text-secondary"><i class="ti-user fa-2x"></i></div>
                                <div class="col px-4">'.$regist['nombre'].' <small class="text-muted">'.$regist['correo'].'</small></div>
                                <div class="col text-end"><i class="ti-marker-alt "></i></div>
                                </div> 
                            </a>';
            };

        }

        $data .= '</div>';

        echo $data;

    }

    public function  listarRoles(){

        $respuesta = $this->model->listarRoles();
  
        foreach ($respuesta as $r){
          echo'  
          <option class="p-5" value="'.$r->id.'">'.$r->nombre.'</option>';
        };
  
      }

    public function consultar($id){
      
        $resp = $this->model->consultar($id);

        $resultados [] = [
            "nombre"=>$resp->getnombre(),
            "correo"=>$resp->getcorreo(),
            "contraseña"=>$resp->getcontraseña(),
            "id"=>$resp->getid(),
            "rol_usuario"=>$resp->getrol_usuario()
        ];
        echo json_encode($resultados);
      
    }

    public function guardar(){
        if (!empty($_POST['id'] && $_POST['nombre1'] && $_POST['correo'] && $_POST['rol'] )) {

			$p=new usuariosModel();

			$p->setid($_POST['id']);
            $p->setnombre($_POST['nombre1']);
            $p->setcorreo($_POST['correo']);
            $p->setcontraseña($_POST['contraseña']);
            $p->setrol_usuario($_POST['rol']);

			$this->model->guardar($p);
				
		}
    }

    public function registrar(){
        if (!empty( $_POST['nombre'] && $_POST['correo'] && $_POST['rol'])) {

		    $p=new usuariosModel();

            $p->setnombre($_POST['nombre']);
            $p->setcorreo($_POST['correo']);
            $p->setcontraseña($_POST['contraseña']);
            $p->setrol_usuario($_POST['rol']);

			$this->model->registrar($p);
				
		}
    }

    public function eliminar(){
			$this->model->eliminar($_POST['id']);
   	}

    public function buscar(){
        $data = '';
        $respuesta = $this->model->buscar($_POST["busqueda"]);
        if ($respuesta->rowCount() > 0) {
            foreach ($respuesta as $regist) {
                $data .= '<a onclick="consultarclientes('.$regist["id"].');" type="button" class="list-group-item text-dark list-group-item-action py-3">
                            <div class="row align-items-center">
                            <div class="col-1 text-secondary"><i class="ti-user fa-2x"></i></div>
                            <div class="col px-4">'.$regist['nombre'].' <small class="text-muted">'.$regist['correo'].'</small></div>
                            <div class="col text-end"><i class="ti-marker-alt "></i></div>
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