<?php 
	include("constantes.php");

	class Conexion {
		private $conexion;
		private $ejecucion;

		public function __construct(){
			
			if(!$this->conexion = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME)){
				echo "<h1>[:(] Error al conectar a la base de datos</h1>";	
				exit();
			}		
			return $this->conexion;
		}        

		public function ConsultaBD($sSQL) {
			return $this->conexion->query($sSQL);
		}

	}
?>