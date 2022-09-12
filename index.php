<?php
require_once 'content/config/settings/SysConfig.php';
require_once 'content/controllers/frontController.php';

$Config = new SysConfig();
$Config->_init();


$index = new frontController($_REQUEST);

?>