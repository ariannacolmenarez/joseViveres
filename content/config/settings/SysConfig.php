<?php

define("_DIRECTORY_","http://localhost/Jose%20Ramones%20Viveres/");
define("_CONTROLLER_","http://localhost/Jose%20Ramones%20Viveres/content/controllers/");
define("_INDEX_FILE_","http://localhost/Jose%20Ramones%20Viveres/index.php");
define("_THEME_","http://localhost/Jose%20Ramones%20Viveres/assets/");
define("_MODEL_","http://localhost/Jose%20Ramones%20Viveres/content/models/");
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

    protected function directory(){
        return _DIRECTORY_;
    }

    protected function controller(){
        return _CONTROLLER_;
    }

    protected function index_file(){
        return _INDEX_FILE_;
    }

    protected function theme(){
        return _THEME_;
    }

    protected function model(){
        return _MODEL_;
    }

    protected function db_server(){
        return _DB_SERVER_;
    }

    protected function db_web(){
        return _DB_WEB_;
    }

    protected function db_host(){
        return _DB_HOST_;
    }

    protected function db_user(){
        return _DB_USER_;
    }

    protected function db_password(){
        return _DB_PASSWORD_;
    }

    protected function db_charset(){
        return _DB_CHARSET_;
    }


}

?>