<?php

class balanceController {
    function balance(){
        require("content/component/header.php");
        require("view/balance.php");
        require_once ("content/component/footer.php");
        include ("view/proveedores.php");
        
    }
}

?>