<?php

class reportedeudasController extends Autoload {
  private $model;

    public function __construct(){
        parent::__construct();
        $this->model = new reportedeudasModel;

    }

    public function reporteDeudas(){
        $data['page_tag'] = "Reporte Deudas | Market MP";
        $data['page_title'] = "Reporte Deudas";
        parent::getView("reporteDeudas", $data);   
    }

    public function getDeudas(){
        $result = $this->model->getBalance($_POST['datos']);
        if($result == ''){
            echo 0;
        }
        else{
            $result = json_decode(json_encode($result),true);
            $tabla = '<div style="margin-left:auto; margin-right:auto;width:100%">
            <table class="table" style="width:100%;">
            <thead class="table-light"><tr -webkit-print-color-adjust: exact; height:30px">
            <th class="w-50" style="text-align:center">Deudas</th>
            <th class="w-50" style="text-align:center">Total</th>
            </tr></thead><tbody>';
            
            $cont=0;
            $contTotal=0;
        //        $result['Gastos pagos'] = json_decode(json_encode($result['Gastos pagos']),true);
                $tabla.='<tr style="color:white;background:gray; -webkit-print-color-adjust: exact; height:30px">
                <td class="w-100" colspan="2" style="text-align:center">Gastos por pagar</td>
                </tr>';
                foreach($result as $ac){
                $tabla.='<tr style="height:30px">
                <td class="w-50" style="text-align:center">'.$ac['concepto'].'</td>
                <td class="w-50" style="text-align:center">'.floatval($ac['total_pagado']).'</td>
                </tr>';
                $cont=$cont+floatval($ac['total_pagado']);
                }
                $tabla.='<thead class="table-light"><tr -webkit-print-color-adjust: exact; height:30px">
                <td class="w-50" style="text-align:center">Total gastos por pagar</td>
                <td class="w-50" style="text-align:center">'.$cont.'</td>
                </tr></thead>';

            $contTotal=floatval($contTotal) + floatval($cont);

            $tabla.='<tr style="height:30px">
            <td class="w-100" colspan="2" style="text-align:center"></td>
            </tr>
            <thead class="table-light"><tr -webkit-print-color-adjust: exact">
            <td class="w-50" style="text-align:center">Total de deudas</td>
            <td class="w-50" style="text-align:center">'.$contTotal.'</td>
            </tr></thead></tbody></table></div>';
            echo $tabla ;

        }
    }

}

?>