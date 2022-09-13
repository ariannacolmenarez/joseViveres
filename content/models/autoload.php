<?php 
	class Autoload
	{ protected $views;
		public function __construct()
		{
			 $this->loadModel();
		}

		public function loadModel()
		{   
            $modelName = get_class($this);
            $res= array_reduce(
                    str_split($modelName),
                    function($c, $v) {
                        $c .= ctype_upper($v) ? ' ' . $v : $v;
                        return $c;
                    }
                );
            $modelarray = (explode(" ", $res));
            
                
			$model = $modelarray[0]."Model";
			$routClass = "content/models/".$model.".php";
            
			if (file_exists($routClass)) {
				require_once($routClass);
			}
		}
		function getView($view, $data="")
		{
			$view = "view/".$view.".php";
			if (file_exists($view)) {
				require_once($view);
			}
		}
	}
	
?>