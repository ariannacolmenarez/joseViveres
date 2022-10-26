<?php

class ingresoController extends Autoload {
  private $model;

    public function __construct(){
        parent::__construct();
        $this->model = new ingresoModel;

    }

    public function ingreso(){
        $data['page_tag'] = "Ingreso de productos | Market MP";
        $data['page_title'] = "Ingreso de productos";
        parent::getView("Ingresos", $data);
        
    }


    public function  listarIngresos(){
        $data = '<thead>
                    <tr>
                        <th>Fecha</th>
                        <th>NRO Factura</th>
                        <th>Total Factura</th>
                        <th>Proveedor</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>';
  
        $respuesta = $this->model->listarIngreso();
  
        foreach ($respuesta as $regist) 
        { 
              $data .= '<tr>
                            <td>'.$regist['fecha'].'</td>
                            <td>'.$regist['nro_factura'].'</td>
                            <td>'.$regist['total_factura'].'</td>
                            <td>'.$regist['nombre'].'</td>
                            <td>
                            <div class="row">
                                ';
                                $data.='<div class="col-6">
                                <button title="Anular" onclick="eliminarIngreso('.$regist['id'].');" class="btn btn-outline-danger btn-rounded btn-icon">
                                    <i class="ti-na"></i>
                                </button>
                                </div>';
                                
                                $data.='
                                <div class="col-6">
                                <button title="Consultar" onclick="consultarIngreso('.$regist['id'].',2);" class="btn btn-outline-primary btn-rounded btn-icon" data-bs-target="#exampleModalToggle20" data-bs-toggle="modal">
                                    <i class="ti-eye"></i>
                                </button>
                                </div>';
                                
                            $data.='</div>
                            </td>
                        </tr>';
        }
  
      $data .= '</tbody>';
      echo $data;
  
    }

    public function  listarProductos(){

        $respuesta = $this->model->listarProductos();
        echo '<option selected="selected" disabled value="">Producto</option>';
        foreach ($respuesta as $r){
          echo'  
          <option value="'.$r['id'].'-'.$r['nombre'].'">'.$r['nombre'].' '.$r['marca'].' de '.$r['volumen'].''.$r['unidad_medida'].'*'.$r['unidades'].'</option>';
        };
  
    }

    public function  listarProveedores(){

        $respuesta = $this->model->listarProveedores();
        echo '<option selected="selected" disabled value="">Proveedores</option>';
        foreach ($respuesta as $r){
          echo'  
          <option value="'.$r['id'].'">'.$r['nombre'].'</option>';
        };
  
    }

    function registrar(){
        
        if (!empty( $_POST['parametros']["proveedor"] && $_POST['parametros']["fechaI"] && $_POST['parametros']["nro_fac"] && $_POST['parametros']["estado_fac"] && $_POST['parametros']['fecha_fac'])) {
  
            $p=new ingresoModel();
  
            $p->setfecha($_POST['parametros']['fechaI']);
            $p->setnro_factura($_POST['parametros']['nro_fac']);
            $p->setestado_factura($_POST['parametros']['estado_fac']);
            $p->setfecha_factura($_POST['parametros']['fecha_fac']);
            $p->setproveedor($_POST['parametros']['proveedor']);
            $p->setid_producto($_POST['data']);
            $p->setmetodo_factura($_POST['parametros']['metodo']);
  
            $this->model->registrar($p);
        
        }
    }

    public function consultarIngreso($id){
      
        $resp = $this->model->consultarIngreso($id);
  
        $resultados [] = [
        
          "fecha"=>$resp->getfecha(),
          "nro_factura"=>$resp->getnro_factura(),
          "fecha_factura"=>$resp->getfecha_factura(),
          "total_factura"=>$resp->gettotal_factura(),
          "estado_factura"=>$resp->getestado_factura(),
          "proveedor"=>$resp->getproveedor(),
        ];
        echo json_encode($resultados);
        
    }

    public function obtenerproductosI($id){
      
        $resp = $this->model->ObtenerproductosI($id);
        $productos[]= [];
        foreach ($resp as $regist) 
        { 
            array_push($productos,array(
                "id"=>$regist['id'],
                "nombre"=> $regist['nombre'],
                "costo"=> $regist['precio_costo'],
                "venta"=> $regist['precio_venta'],
                "cantidad"=> $regist['cantidad'],
            ));
        }
        
        echo json_encode($productos);
        
    }

    // function guardar(){
        
    //     if (!empty( $_POST['parametros']["proveedor"] && $_POST['parametros']["fechaI"] && $_POST['parametros']["nro_fac"] && $_POST['parametros']["estado_fac"] && $_POST['parametros']['fecha_fac'])) {
  
    //         $p=new ingresoModel();
    //         $p->setid($_POST['parametros']['id']);
    //         $p->setfecha($_POST['parametros']['fechaI']);
    //         $p->setnro_factura($_POST['parametros']['nro_fac']);
    //         $p->setestado_factura($_POST['parametros']['estado_fac']);
    //         $p->setfecha_factura($_POST['parametros']['fecha_fac']);
    //         $p->setproveedor($_POST['parametros']['proveedor']);
    //         $p->setproductos($_POST['data']);
  
    //         $this->model->guardar($p);
        
    //     }
    // }

    // public function guardarIngreso(){
    //     if (!empty($_POST['id'] && $_POST['fecha'] )) {
  
    //         $p=new ingresoModel();
  
    //         $p->setid($_POST['id']);
    //         $p->setfecha($_POST['fecha']);
    //         $p->setnro_factura($_POST['nro_factura']);
    //         $p->setfecha_factura($_POST['fecha_factura']);
    //         $p->setestado_factura($_POST['estado_factura']);
    //         $p->settotal_factura($_POST['total_factura']);
    //         $p->setproveedor($_POST['proveedor']);

    //         $this->model->guardarIngreso($p);
                  
    //     }
    // }

    // public function eliminarIngreso($id){
    //     $this->model->eliminarIngreso($id);
    // }


}
?>