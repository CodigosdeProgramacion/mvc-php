<?php
	
	class VehiculosController {
		
		public function __construct(){
			require_once "models/VehiculosModel.php";
		}
		
		public function index(){
			
			
			$vehiculos = new Vehiculos_model();
			$data["titulo"] = "Vehiculos";
			$data["vehiculos"] = $vehiculos->get_vehiculos();
			
			require_once "views/vehiculos/vehiculos.php";	
		}
		
		public function nuevo(){
			
			$data["titulo"] = "Vehiculos";
			require_once "views/vehiculos/vehiculos_nuevo.php";
		}
		
		public function guarda(){
			
			$placa = $_POST['placa'];
			$marca = $_POST['marca'];
			$modelo = $_POST['modelo'];
			$anio = $_POST['anio'];
			$color = $_POST['color'];
			
			$vehiculos = new Vehiculos_model();
			$vehiculos->insertar($placa, $marca, $modelo, $anio, $color);
			$data["titulo"] = "Vehiculos";
			$this->index();
		}
		
		public function modificar($id){
			
			$vehiculos = new Vehiculos_model();
			
			$data["id"] = $id;
			$data["vehiculos"] = $vehiculos->get_vehiculo($id);
			$data["titulo"] = "Vehiculos";
			require_once "views/vehiculos/vehiculos_modifica.php";
		}
		
		public function actualizar(){

			$id = $_POST['id'];
			$placa = $_POST['placa'];
			$marca = $_POST['marca'];
			$modelo = $_POST['modelo'];
			$anio = $_POST['anio'];
			$color = $_POST['color'];

			$vehiculos = new Vehiculos_model();
			$vehiculos->modificar($id, $placa, $marca, $modelo, $anio, $color);
			$data["titulo"] = "Vehiculos";
			$this->index();
		}
		
		public function eliminar($id){
			
			$vehiculos = new Vehiculos_model();
			$vehiculos->eliminar($id);
			$data["titulo"] = "Vehiculos";
			$this->index();
		}	
	}
?>