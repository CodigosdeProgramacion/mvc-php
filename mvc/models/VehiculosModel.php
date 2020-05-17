<?php
	
	class Vehiculos_model {
		
		private $db;
		private $vehiculos;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->vehiculos = array();
		}
		
		public function get_vehiculos()
		{
			$sql = "SELECT * FROM vehiculos";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->vehiculos[] = $row;
			}
			return $this->vehiculos;
		}
		
		public function insertar($placa, $marca, $modelo, $anio, $color){
			
			$resultado = $this->db->query("INSERT INTO vehiculos (placa, marca, modelo, anio, color) VALUES ('$placa', '$marca', '$modelo', '$anio', '$color')");
			
		}
		
		public function modificar($id, $placa, $marca, $modelo, $anio, $color){
			
			$resultado = $this->db->query("UPDATE vehiculos SET placa='$placa', marca='$marca', modelo='$modelo', anio='$anio', color='$color' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM vehiculos WHERE id = '$id'");
			
		}
		
		public function get_vehiculo($id)
		{
			$sql = "SELECT * FROM vehiculos WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>