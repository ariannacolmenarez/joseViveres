<?php

class reporteinventarioController extends Autoload {
  private $model;

    public function __construct(){
        parent::__construct();
        $this->model = new reporteinventarioModel;

    }

    public function reporteInventario(){
        $data['page_tag'] = "Reporte Invetario | Market MP";
        $data['page_title'] = "Reporte Invetario";
        parent::getView("reporteInventario", $data);   
    }

    public function getInventario(){
        $result = $this->model->getInventario();
        $result = json_decode(json_encode($result),true);
<<<<<<< HEAD
        $tabla="<table class='w-100 table'>
        <thead><tr style='-webkit-print-color-adjust: exact;'>
        <th colspan='5'>Inventario</th>
        </tr></thead>
        <thead>
        <tr style='-webkit-print-color-adjust: exact;'>
        <th>Código</th>
        <th>Descripción</th>
        <th>Cantidad</th>
        <th>Precio de costo</th>
        <th>Precio de venta</th>
        </tr></thead><tbody>";
=======
        $tabla="<table class='table' class='w-100'>
        <thead class='table-light'><tr -webkit-print-color-adjust: exact;'>
        <th class='text-center' colspan='5'>Inventario</th>
        </tr></thead>
        <tr style='background:gray;color:white;height:30px;-webkit-print-color-adjust: exact;'>
        <td>Código</td>
        <td>Descripción</td>
        <td>Cantidad</td>
        <td>Precio de costo</td>
        <td>Precio de venta</td>
        </tr>";
>>>>>>> 8c8f1e958aaee641e4586b865eb1abf43f352604
        
        foreach($result as $r){
            $tabla.="
            <tr style='height:30px'>
            <td>".$r['id']."</td>
            <td>".$r['nombre']."</td>
            <td>".$r['cantidad']."</td>
            <td>".$r['precio_costo']."</td>
            <td>".$r['precio_venta']."</td>
            </tr>";
        }

<<<<<<< HEAD
        $tabla.="</tbody></table>";
=======
        $tabla.="</table>";
>>>>>>> 8c8f1e958aaee641e4586b865eb1abf43f352604

        echo $tabla;
        
    }

}

?>