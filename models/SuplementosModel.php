<?php
	
	class Vehiculos_model {
		
		private $db;
		private $suplementos;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->get_suplementos = array();
		}
		
		public function get_suplementos()
		{
			$sql = "SELECT * FROM suplementos";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->get_suplementos[] = $row;
			}
			return $this->get_suplementos;
		}
		
		public function insertar($id, $marca, $modelo, $sabor, $color){
			
			$resultado = $this->db->query("INSERT INTO suplementos (modelo, marca, id, sabor, color) VALUES ('$placa', '$marca', '$modelo', '$anio', '$color')");
			
		}
		
		public function modificar($id, $marca, $modelo, $sabor, $color){
			
			$resultado = $this->db->query("UPDATE suplementos SET id='$id', marca='$marca', modelo='$modelo', anio='$anio', color='$color' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM suplementos WHERE id = '$id'");
			
		}
		
		public function get_vehiculo($id)
		{
			//"COMENTARIOS"
			$sql = "SELECT * FROM suplementos WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>