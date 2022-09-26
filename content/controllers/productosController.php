<?php

class productosController extends Autoload {
  private $model;

  public function __construct(){
        parent::__construct();
        $this->model = new productosModel;

    }

    public function registrar(){
      
      if (!empty( $_POST['categoria'] && $_POST['precio'] && $_POST['costo']
       && $_POST['cantidad'] && $_POST['nombre'])) {

				$p=new productosModel();

        $p->setnombre($_POST['nombre']);
        $p->setcantidad($_POST['cantidad']);
        $p->setprecio_costo($_POST['costo']);
        $p->setprecio_venta($_POST['precio']);
        $p->setid_categoria($_POST['categoria']);
        $p->setdescripcion($_POST['descripcion']);
        
        if(isset($_FILES['file'])){
          if (($_FILES["file"]["type"] == "image/pjpeg")
            || ($_FILES["file"]["type"] == "image/jpeg")
            || ($_FILES["file"]["type"] == "image/png")
            || ($_FILES["file"]["type"] == "image/gif")) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], "assets/images/productos/".$_FILES['file']['name'])) {
              $p->seturl_img("assets/images/productos/".$_FILES['file']['name']);
            } else {
              die("<script>document.location.href='error';</script>");
            }
          } else {
            die("<script>document.location.href='error';</script>");
          }
        }
				$this->model->registrar($p);
				
			}
    }

    public function  listarCat(){

      $respuesta = $this->model->listarCat();

      foreach ($respuesta as $r){
        echo'  
        <option value="'.$r->id.'">'.$r->categoria.'</option>';
      };

    }

    public function consultar($id){
      
      $resp = $this->model->consultar($id);

      $resultados [] = [
        "url_img"=>$resp->geturl_img(),
        "nombre"=>$resp->getnombre(),
        "cantidad"=>$resp->getcantidad(),
        "costo"=>$resp->getprecio_costo(),
        "precio"=>$resp->getprecio_venta(),
        "categoria"=>$resp->getid_categoria(),
        "descripcion"=>$resp->getdescripcion(),
        "id"=>$id
      ];
      echo json_encode($resultados);
      
    }

    public function guardar(){
      if (!empty( $_POST['categoria'] && $_POST['precio'] && $_POST['costo']
       && $_POST['cantidad'] && $_POST['nombre'])) {

				$p=new productosModel();

        $p->setnombre($_POST['nombre']);
        $p->setcantidad($_POST['cantidad']);
        $p->setprecio_costo($_POST['costo']);
        $p->setprecio_venta($_POST['precio']);
        $p->setid_categoria($_POST['categoria']);
        $p->setdescripcion($_POST['descripcion']);
        $p->setid($_POST['id']);
        if(isset($_FILES['file'])){
          if (($_FILES["file"]["type"] == "image/pjpeg")
            || ($_FILES["file"]["type"] == "image/jpeg")
            || ($_FILES["file"]["type"] == "image/png")
            || ($_FILES["file"]["type"] == "image/gif")) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], "assets/images/productos/".$_FILES['file']['name'])) {
              $p->seturl_img("assets/images/productos/".$_FILES['file']['name']);
            } else {
              die("<script>document.location.href='error';</script>");
            }
          } else {
            die("<script>document.location.href='error';</script>");
          }
        }
				$this->model->guardar($p);
				
			}
    }

    

    public function eliminar(){
			$this->model->eliminar($_POST['id']);
   	}


}

?>