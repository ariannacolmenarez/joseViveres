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
}

?>