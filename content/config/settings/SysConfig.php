<?php
//Editar esta variable para cambiar la direccion del host
$localhostDirection = "http://localhost/joseViveres/";

define("_DIRECTORY_",$localhostDirection);
define("_CONTROLLER_",$localhostDirection."content/controllers/");
define("_INDEX_FILE_",$localhostDirection."index.php");
define("_THEME_",$localhostDirection."assets/");
define("_MODEL_",$localhostDirection."content/models/");
define("_DB_SERVER_","http://localhost/");
define("_DB_WEB_","joseviveresbd");
define("_DB_HOST_","localhost");
define("_DB_USER_","root");
define("_DB_PASSWORD_","");
define("_DB_CHARSET_","charset=utf8");

class SysConfig {
    
    public function _init(){
        if(file_exists("content/controllers/frontController.php")){
            
        }else{
            die("fallo");
        }
    }


}

?>