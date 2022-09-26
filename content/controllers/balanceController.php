<?php

class balanceController extends Autoload {

    function __construct()
    {
        parent::__construct();
        $this->model = new balanceModel;

    }

    function balance(){
        $data['page_tag'] = "Balance | Market MP";
        $data['page_title'] = "Balance";
        parent::getView("balance", $data);
    }

    public function  listar(){

        $data = '<table class="table" id="example">
              <thead>
                <tr>
                  <th>Fecha - Hora</th>
                  <th>Concepto</th>
                  <th>Medio de pago</th>
                  <th>Valor</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>';
        
        $respuesta = $this->model->listar($_POST['fecha']);
  
          foreach ($respuesta as $regist) {
            
            $data .= '<tr>
              <td>'.$regist['fecha'].'-'.$regist['hora'].'</td>
              <td>';
            $productos=$this->model->listarproductos($regist['id']);
            
            foreach($productos as $prod){
                if ($productos) {
                    $data.=''.$prod['cantidad'].'-'.$prod['nombre'].'  ';
                }else{
                    $data.='';
                }
                
            }
            
              $data.='</td><td>'.$regist['nombre'].'</td>
              <td>'.$regist['total'].'</td>
              <td>
                <div class="row">
                  <div class="col">
                    <button onclick="eliminarVenta('.$regist['id'].');" class="btn btn-outline-danger btn-rounded btn-icon">
                      <i class="ti-trash"></i>
                    </button>
                  </div>
                  <div class="col">
                    <button onclick="reciboVenta('.$regist['id'].');" class="btn btn-outline-secondary btn-rounded btn-icon">
                      <i class="ti-receipt"></i>
                    </button>
                  </div>
                </div>
              </td>
            </tr>';
          };
  
        $data .= '</tbody>
        </table>';
  
        echo json_encode($data);
      }

    public function  listarEgresos(){

        $data = '<table class="table" id="example">
              <thead>
                <tr>
                  <th>Fecha - Hora</th>
                  <th>Concepto</th>
                  <th>Medio de pago</th>
                  <th>Valor</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>';
  
        $respuesta = $this->model->listarEgresos($_POST['fecha']);
        
          foreach ($respuesta as $regist) {
            $data .= '<tr>
              <td>'.$regist['fecha'].'-'.$regist['hora'].'</td>
              <td>'.$regist['categoria'].'</td>
              <td>'.$regist['nombre'].'</td>
              <td>'.$regist['total'].'</td>
              <td>
                <div class="row">
                  <div class="col">
                    <button onclick="eliminarGasto('.$regist['id'].');" class="btn btn-outline-danger btn-rounded btn-icon">
                      <i class="ti-trash"></i>
                    </button>
                  </div>
                  <div class="col">
                    <button onclick="reciboGasto('.$regist['id'].');" class="btn btn-outline-secondary btn-rounded btn-icon">
                      <i class="ti-receipt"></i>
                    </button>
                  </div>
                </div>
              </td>
            </tr>';
          };
  
        $data .= '</tbody>
        </table>';
  
        echo json_encode($data);
    }

    public function totales(){
        $respuesta = $this->model->totales($_POST['fecha'],$_POST['data']);
        if ($respuesta["SUM(total)"] == NULL) {
          echo 0;
        }else {
          echo $respuesta["SUM(total)"];
        }
    }


}

?>