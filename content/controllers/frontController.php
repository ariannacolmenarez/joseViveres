<?php
require_once 'content/config/settings/SysConfig.php';

	class frontController {
	
		function __construct($request){
			$url = implode("/", $request);
			preg_match_all('/^[a-zA-Z0-9-@\/.=:_#$ ]{1,700}$/',$url,
			$salida, PREG_PATTERN_ORDER);

			if(!empty($salida[0][0])){

				$controlador = $url;
				$arr = explode("/", $controlador);
				$controller = $arr[0];
				$method = $arr[0]; 
				$params = "";

				if (!empty($arr[1]))
				{
					if ($arr[1] != "") {
						$method = $arr[1];
					}	
				}

				if (!empty($arr[2])) 
				{
					if ($arr[2] != "") {
						$params = $arr[2];
					}
				}
				
				$controllerFile = "content/controllers/".$controller."Controller.php";
                
				if(file_exists($controllerFile)){
					$cname=$controller."Controller";
                    require_once($controllerFile);
					//$cname = "content\\controllers\\".$c;printf($cname);
					$i = new $cname;
					if (method_exists($i, $method)) {
						$i->{$method}($params);
					}else{
			            echo $params;
					//	die("<script>document.location.href='error';</script>");
					}
					
				}else{
					die("<script>document.location.href='error';</script>");
				}
				
				
			}else{
				require_once "balanceController.php";
				$controlador= new balanceController();
				call_user_func(array($controlador,"balance"));
			}
		}
	}

