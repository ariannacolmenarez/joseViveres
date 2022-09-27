<?php
class deudasController extends Autoload {

    function __construct()
    {
        parent::__construct();
        $this->model = new deudasModel;

    }

    function deudas(){
        $data['page_tag'] = "Deudas | Market MP";
        $data['page_title'] = "Deudas";
        parent::getView("deudas", $data);
    }

    public function  listar(){

        $data = '<a type="button" data-bs-target="#exampleModalToggle17" data-bs-toggle="modal" class="list-group-item text-dark list-group-item-action py-3">
        <div class="row align-items-center">';
  
        $respuesta = $this->model->listar($_POST['opcion']);
  
          foreach ($respuesta as $regist) {
                  if ($respuesta->rowCount() > 0) {
                      $data.= '<div class="col-1 text-danger fs-4"><span class="badge bg-danger rounded-pill">14</span></div>
                      <div class="col px-4 text-dark fs-5">Maria Ramones</div>
                      <div class="col text-end text-danger fs-5">250,00bs <b class="text-dark">|</b> 23$</div>
                      <div class="col text-end"><i class="ti-more-alt fa-2x"></i></div>';
                  }else {
                      $data.= '<div>No hay registros</div>';
                  }
          };
  
        $data .= '</div> 
        </a>';
  
        echo json_encode($data);
      }

}
?>