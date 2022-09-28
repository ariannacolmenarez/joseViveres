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

    public function  listarDeudasPagar(){

        $data = '';
  
        $respuesta = $this->model->listarDeudasPagar();
  
          foreach ($respuesta as $regist) {
                  if ($regist['cant'] > 0) {
                      $data.= '<a type="button" onclick="editarDeudaPagar('.$regist['id'].','.$regist['total'].','.$regist['cant'].');" class="list-group-item text-dark list-group-item-action py-3">
                                <div class="row align-items-center"><div class="col-1 text-secondary fs-4"><span class="badge bg-secondary rounded-pill">'.$regist['cant'].'</span></div>
                                    <div class="col px-4 text-dark fs-5">'.$regist['nombre'].'</div>
                                    <div class="col text-end text-secondary fs-5">'.$regist['total'].'</div>
                                    <div class="col text-end"><i class="ti-more-alt fa-2x"></i></div>
                                </div> 
                              </a>';
                  }else {
                      $data.= '<div class="text-center"> <h4>No hay registros</h4></div>';
                  }
          };
  
        $data .= '';

        $respuesta2=$this->model->totalPagar();
  
        echo json_encode([
            'data' => $data,
            'total' => $respuesta2["SUM(total)"]
        ]);
    }

    public function  listarDeudasCobrar(){

        $data = '';
  
        $respuesta = $this->model->listarDeudasCobrar();
  
          foreach ($respuesta as $regist) {
                  if ($regist['cant'] > 0) {
                      $data.= '<a type="button" onclick="editarDeudaCobrar('.$regist['id'].','.$regist['total'].','.$regist['cant'].');" class="list-group-item text-dark list-group-item-action py-3">
                                <div class="row align-items-center"><div class="col-1 text-secondary fs-4"><span class="badge bg-secondary rounded-pill">'.$regist['cant'].'</span></div>
                                    <div class="col px-4 text-dark fs-5">'.$regist['nombre'].'</div>
                                    <div class="col text-end text-secondary fs-5">'.$regist['total'].'</div>
                                    <div class="col text-end"><i class="ti-more-alt fa-2x"></i></div>
                                </div> 
                              </a>';
                  }else {
                      $data.= '<div class="text-center"> <h4>No hay registros</h4></div>';
                  }
          };
  
        $data .= '';

        $respuesta2=$this->model->totalCobrar();
  
        echo json_encode([
            'data' => $data,
            'total' => $respuesta2["SUM(total)"]
        ]);
    }

    public function movimientosPagar($id){
        $respuesta = $this->model->movimientosPagar($id);
        $data='';
        foreach ($respuesta as $regist) {
            $data.= '<a onclick="detallesPagar('.$regist['id'].','.$regist['resto'].');" type="button" class="list-group-item text-dark list-group-item-action py-3">
            <div class="row align-items-center">
              <div class="col-8  text-secondary">'.$regist['categoria'].'</div>
              <div class="col-3 text-end">'.$regist['total'].'<small class="text-muted"> Resta: '.$regist['resto'].'</small></div> 
              <div class="col-1 text-end"><i class="ti-angle-right "></i></div>
            </div> 
          </a>';
          if ($regist['nombre']=="") {
            $nombre="Gasto";
          }else{
            $nombre= $regist['nombre'];
          }
          
        }
        $data .='';
        echo json_encode([
            'data' => $data,
            'nombre' => $nombre
        ]);
    }

    public function movimientosCobrar($id){
        $respuesta = $this->model->movimientosCobrar($id);
        $data='';
        foreach ($respuesta as $regist) {
            $data.= '<a type="button" onclick="detallesCobrar('.$regist['id'].','.$regist['resto'].')" class="list-group-item text-dark list-group-item-action py-3">
            <div class="row align-items-center">
              <div class="col-6 text-secondary">'.$regist['productos'].'</div>
              <div class="col-5 text-end">'.$regist['total'].'<small class="text-muted"> Resta: '.$regist['resto'].'</small></div>
              <div class="col-1 text-end"><i class="ti-angle-right "></i></div>
            </div> 
          </a>';
          $nombre=$regist['nombre'];
        }
        $data .='';
        echo json_encode([
            'data' => $data,
            'nombre'=>$nombre
        ]);
    }

    public function detallesPagar($id){
        $resp = $this->model->detallesPagar($id);
        echo json_encode($resp);
    }

    public function detallesCobrar($id){
        $resp = $this->model->detallesCobrar($id);
        $productos = $this->model->detallesCobrarProd($id);
        $data='<thead>
            <tr>
            <th scope="col">Producto</th>
            <th scope="col">Cant</th>
            <th scope="col">Precio U</th>
            <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">';
        foreach ($productos as $regist) {
            
            $data.= ' <tr>
            <td>'.$regist['nombre'].'</td>
            <td>'.$regist['cantidad'].'</td>
            <td>'.$regist['precio_venta'].'</td>
            <td>'.$regist['precio'].'</td>
            </tr>
            <tr>';
        }
        $data .='</tbody>';
        echo json_encode([
            'data' => $resp,
            'productos'=>$data
        ]);
    }

    public function abonar($tipo){
        if (!empty($_POST['id'] && $_POST['metodo'] && $_POST['valor']&& $_POST['fecha'] )) {

            $p=new deudasModel();

            $p->setid_abono($_POST['id']);
            $p->setmetodo_abono($_POST['metodo']);
            $p->setvalor_abono($_POST['valor']);
            $p->setconcepto_abono($_POST['concepto']);
            $p->setfecha_abono($_POST['fecha']);
            $tipo=$tipo;

            $this->model->registrarAbono($p,$tipo);

        }
    }
}
?>