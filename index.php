<?php
require_once ('content/config/settings/SysConfig.php');
require_once ('content/controllers/frontController.php');
require_once ("content/models/conexionBd.php");
require_once ("content/models/autoload.php");

$Config = new SysConfig();
$Config->_init();

$index = new frontController($_REQUEST);

?>