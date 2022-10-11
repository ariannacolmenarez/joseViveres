<?php

class reportebalanceController extends Autoload {
  private $model;

    public function __construct(){
        parent::__construct();
        $this->model = new reportebalanceModel;

    }

    public function reporteBalance(){
        $data['page_tag'] = "Reporte Balance | Market MP";
        $data['page_title'] = "Reporte Balance";
        parent::getView("reporteBalance", $data);   
    }

    public function getBalance(){
        $result = $this->model->getBalance($_POST['datos']);
        if($result == ''){
            echo 0;
        }
        else{
            $tabla = '<div style="margin-left:auto; margin-right:auto;width:100%">
            <table class="table" style="width:100%;">
<<<<<<< HEAD
            <thead>
            <tr style=" -webkit-print-color-adjust: exact; height:30px">
=======
            <thead class="table-light"><tr -webkit-print-color-adjust: exact; height:30px">
>>>>>>> 8c8f1e958aaee641e4586b865eb1abf43f352604
            <th class="w-50" style="text-align:center">Activos</th>
            <th class="w-50" style="text-align:center">Total</th>
            </tr></thead><tbody>';
            
            $cont=0;
            $contTotal=0;
            if($result['Activos en caja']!=[]){
                $result['Activos en caja'] = json_decode(json_encode($result['Activos en caja']),true);
                $tabla.='<tr style="color:white;background:gray; -webkit-print-color-adjust: exact; height:30px">
                <td class="w-100" colspan="2" style="text-align:center">Activos en caja</td>
                </tr>';
                foreach($result['Activos en caja'] as $ac){
                $tabla.='<tr style="height:30px">
                <td class="w-50" style="text-align:center">Venta de '.$ac['nombre_producto'].'</td>
                <td class="w-50" style="text-align:center">'.floatval($ac['total_venta']).'</td>
                </tr>';
                $cont=$cont+floatval($ac['total_venta']);
                }
<<<<<<< HEAD
                $tabla.='<thead><tr style=" -webkit-print-color-adjust: exact; height:30px">
                <th class="w-50" style="text-align:center">Total activos en caja</th>
                <th class="w-50" style="text-align:center">'.$cont.'</th>
=======
                $tabla.='<thead class="table-light"><tr -webkit-print-color-adjust: exact; height:30px">
                <td class="w-50" style="text-align:center">Total activos en caja</td>
                <td class="w-50" style="text-align:center">'.$cont.'</td>
>>>>>>> 8c8f1e958aaee641e4586b865eb1abf43f352604
                </tr></thead>';
            }

            $contTotal=floatval($contTotal) + floatval($cont);
            $cont=0;

            if($result['Activos por cobrar']!=[]){
                $result['Activos por cobrar'] = json_decode(json_encode($result['Activos por cobrar']),true);
                $tabla.='<tr style="color:white;background:gray; -webkit-print-color-adjust: exact; height:30px">
                <td class="w-100" colspan="2" style="text-align:center">Activos por cobrar</td>
                </tr>';
                foreach($result['Activos por cobrar'] as $ac){
                $tabla.='<tr style="height:30px">
                <td class="w-50" style="text-align:center">Venta de '.$ac['nombre_producto'].'</td>
                <td class="w-50" style="text-align:center">'.floatval($ac['total_venta']).'</td>
                </tr>';
                $cont=$cont+floatval($ac['total_venta']);
                }
<<<<<<< HEAD
                $tabla.='<thead><tr style=" -webkit-print-color-adjust: exact; height:30px">
                <th class="w-50" style="text-align:center">Total activos por cobrar</th>
                <th class="w-50" style="text-align:center">'.$cont.'</th>
=======
                $tabla.='<thead class="table-light"><tr -webkit-print-color-adjust: exact; height:30px">
                <td class="w-50" style="text-align:center">Total activos por cobrar</td>
                <td class="w-50" style="text-align:center">'.$cont.'</td>
>>>>>>> 8c8f1e958aaee641e4586b865eb1abf43f352604
                </tr></thead>';
            }

            $contTotal=floatval($contTotal) + floatval($cont);
            $cont=0;

            if($result['Gastos pagos']!=[]){
                $result['Gastos pagos'] = json_decode(json_encode($result['Gastos pagos']),true);
                $tabla.='<tr style="color:white;background:gray; -webkit-print-color-adjust: exact; height:30px">
                <td class="w-100" colspan="2" style="text-align:center">Gastos pagos</td>
                </tr>';
                foreach($result['Gastos pagos'] as $ac){
                $tabla.='<tr style="height:30px">
                <td class="w-50" style="text-align:center">'.$ac['concepto'].'</td>
                <td class="w-50" style="text-align:center">'.floatval($ac['total_pagado']).'</td>
                </tr>';
                $cont=$cont+floatval($ac['total_pagado']);
                }
<<<<<<< HEAD
                $tabla.='<thead><tr style=" -webkit-print-color-adjust: exact; height:30px">
                <th class="w-50" style="text-align:center">Total gastos pagos</th>
                <th class="w-50" style="text-align:center">'.$cont.'</th>
=======
                $tabla.='<thead class="table-light"><tr -webkit-print-color-adjust: exact; height:30px">
                <td class="w-50" style="text-align:center">Total gastos pagos</td>
                <td class="w-50" style="text-align:center">'.$cont.'</td>
>>>>>>> 8c8f1e958aaee641e4586b865eb1abf43f352604
                </tr></thead>';
            }

            $contTotal=floatval($contTotal) + floatval($cont);

            $tabla.='<tr style="height:30px">
            <td class="w-100" colspan="2" style="text-align:center"></td>
            </tr>
<<<<<<< HEAD
            <thead><tr style="height:30px; -webkit-print-color-adjust: exact">
            <th class="w-50" style="text-align:center">Total de activos</th>
            <th class="w-50" style="text-align:center">'.$contTotal.'</th>
            </tr></thead></tbody></table></div>';
=======
            <thead class="table-light"><tr -webkit-print-color-adjust: exact">
            <td class="w-50" style="text-align:center">Total de activos</td>
            <td class="w-50" style="text-align:center">'.$contTotal.'</td>
            </tr></thead></table>
            </tbody></div>';
>>>>>>> 8c8f1e958aaee641e4586b865eb1abf43f352604
            echo $tabla;
        }
    }

}

?>