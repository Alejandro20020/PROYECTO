<?php
	
	class suplementosController {
		
		public function __construct(){
			require_once "models/suplementosModel.php";
		}
		
		public function index(){
			
			
			$suplementos = new suplementos_model();
			$data["titulo"] = "suplementos";
			$data["suplementos"] = $suplementos->get_suplementos();
			
			require_once "views/suplementos/suplementos.php";	
		}
		
		public function nuevo(){
			
			$data["titulo"] = "suplementos";
			require_once "views/suplementos/suplementos_nuevo.php";
		}
		
		public function guarda(){
			
			$sabor = $_POST['sabor'];
			$marca = $_POST['marca'];
			$modelo = $_POST['modelo'];
			$id = $_POST['id'];
			$color = $_POST['color'];
			
			$suplementos = new suplementos_model();
			$suplementos->insertar($sabor, $marca, $modelo, $id, $color);
			$data["titulo"] = "suplementos";
			$this->index();
		}
		
		public function modificar($id){
			
			$suplementos = new suplementos_model();
			
			$data["id"] = $id;
			$data["suplementos"] = $suplementos->get_suplementos($id);
			$data["titulo"] = "suplementos";
			require_once "views/suplementos/suplementos_modifica.php";
		}
		
		public function actualizar(){

			$id = $_POST['id'];
			$sabor = $_POST['sabor'];
			$marca = $_POST['marca'];
			$modelo = $_POST['modelo'];
			$nombre = $_POST['nombre'];
			$color = $_POST['color'];

			$suplementos = new suplementos_model();
			$suplementos->modificar($id, $placa, $marca, $modelo, $anio, $color);
			$data["titulo"] = "suplementos";
			$this->index();
		}
		
		public function eliminar($id){
			
			$suplementos = new suplementos_model();
			$suplementos->eliminar($id);
			$data["titulo"] = "suplementos";
			$this->index();
		}	
	}
?>