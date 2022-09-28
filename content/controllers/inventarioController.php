<?php

class inventarioController extends Autoload {

    function __construct()
    {
        parent::__construct();
        $this->model = new inventarioModel;

    }

    function inventario(){
        $data['page_tag'] = "Inventario | Market MP";
        $data['page_title'] = "Inventario";
        parent::getView("inventario", $data);
    }

    public function  listarCategoriasProd(){

        $respuesta = $this->model->listarCategoriasProd();
  
        foreach ($respuesta as $r){
          echo'  
          <option value="'.$r->id.'">'.$r->categoria.'</option>';
        };
  
    }

    public function  listar(){

      $data = '';

      $respuesta = $this->model->listar($_POST['opcion']);

    	foreach ($respuesta as $regist) {
                if ($respuesta->rowCount() > 6) {
                    $data.= '<div onclick="editarProducto('.$regist['id'].')" class="col p-1 ">
                                <div class="card h-100"><img src="';
                    if($regist['url_img'] != NULL){
                        $data .= $regist['url_img'];
                    } else{
                        $data .= "assets/images/MP.png";
                    }  
                    $data .='" class="p-3 card-img-top " alt="...">
                                    <div class="card-body text-center">
                                        <h6 class="card-title text-success">'.$regist["nombre"].'</h6>
                                        <p class="card-text">'.$regist["precio_venta"].'BS</p>
                                        <h6 class="text-muted">'.$regist["cantidad"].'<small> disponible</small></h6>                            
                                    </div>
                                </div>
                                </div>';
                }elseif ($respuesta->rowCount() <= 6) {
                    $data.= '<div class="col p-1 ">
                    <div class="card h-50"><img src="./assets/images/MP.png" class="p-3 card-img-top " alt="...">
                        <div class="card-body text-center">
                            <h6 class="card-title text-success">'.$regist["nombre"].'</h6>
                            <p class="card-text">'.$regist["precio_venta"].'BS</p>
                            <h6 class="text-muted">'.$regist["cantidad"].'<small> disponible</small></h6>                            
                        </div>
                    </div>
                    </div>';
                }
    	};

      $data .= '';

      echo json_encode($data);
    }

    public function  totalProd(){
        $respuesta = $this->model->totalProd();
        if ($respuesta["prod"] == NULL) {
          echo 0;
        }else {
          echo $respuesta["prod"];
        }
    }

    public function buscar(){
        $data = '';
        $respuesta = $this->model->buscar($_POST["busqueda"]);
        if ($respuesta->rowCount() > 0) {
            foreach ($respuesta as $regist) {
                if ($respuesta->rowCount() > 6) {
                    $data.= '<div onclick="editarProducto('.$regist['id'].')" class="col p-1 ">
                                <div class="card h-100"><img src="';
                    if($regist['url_img'] != NULL){
                        $data .= $regist['url_img'];
                    } else{
                        $data .= "assets/images/MP.png";
                    }  
                    $data .='" class="p-3 card-img-top " alt="...">
                                    <div class="card-body text-center">
                                        <h6 class="card-title text-success">'.$regist["nombre"].'</h6>
                                        <p class="card-text">'.$regist["precio_venta"].'BS</p>
                                        <h6 class="text-muted">'.$regist["cantidad"].'<small> disponible</small></h6>                            
                                    </div>
                                </div>
                                </div>';
                }elseif ($respuesta->rowCount() <= 6) {
                    $data.= '<div class="col p-1 ">
                    <div class="card h-50"><img src="./assets/images/MP.png" class="p-3 card-img-top " alt="...">
                        <div class="card-body text-center">
                            <h6 class="card-title text-success">'.$regist["nombre"].'</h6>
                            <p class="card-text">'.$regist["precio_venta"].'BS</p>
                            <h6 class="text-muted">'.$regist["cantidad"].'<small> disponible</small></h6>                            
                        </div>
                    </div>
                    </div>';
                }
            }
        }else {$data .= '<div class="row align-items-center">
                          <div class="col text-secondary text-center">No hay registros</div>
                        </div>';
        }
        $data .= '';
  
        echo $data;
      }

}