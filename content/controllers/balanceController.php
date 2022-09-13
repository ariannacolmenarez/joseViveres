<?php

class balanceController extends Autoload {

    function __construct()
    {
        parent::__construct();
        $this->model = new balanceModel;

    }

    function balance(){
        $data['page_tag'] = "Cargos | UPTAEB";
        $data['page_title'] = "Cargos";
        parent::getView("balance", $data);
        parent::getView("proveedores","");
        
    }
}

?>