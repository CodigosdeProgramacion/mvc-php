<?php
	
	function cargarControlador($controlador){
		
		$nombreControlador = ucwords($controlador)."Controller";
		$archivoControlador = 'controllers/'.ucwords($controlador).'.php';
		
		if(!is_file($archivoControlador)){
			
			$archivoControlador= 'controllers/'.CONTROLADOR_PRINCIPAL.'.php';
			
		}
		require_once $archivoControlador;
		$control = new $nombreControlador();
		return $control;
	}
	
	function cargarAccion($controller, $accion, $id = null){
		
		if(isset($accion) && method_exists($controller, $accion)){
			if($id == null){
				$controller->$accion();
				} else {
				$controller->$accion($id);
			}
			} else {
			$controller->ACCION_PRINCIPAL();
		}	
	}
?>