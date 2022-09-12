<?php

class proveedoresController {
    function proveedores(){
      $res="paola";
      echo json_encode([
				'data' => $res
			]);
    }

    function guardar(){
      $resultado = $_POST['valorCaja1'] + $_POST['valorCaja2']; 
  echo json_encode([
				'data' => $resultado
			]);
    }
}

?>