<?php

define("_DIRECTORY_","http://localhost/joseViveres/");
define("_CONTROLLER_","http://localhost/joseViveres/content/controllers/");
define("_INDEX_FILE_","http://localhost/joseViveres/index.php");
define("_THEME_","http://localhost/joseViveres/assets/");
define("_CONTENT_","http://localhost/joseViveres/content/");
define("_MODEL_","http://localhost/joseViveres/content/models/");
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