<?php
	include("conexion.php");

	class Construir {
		private $con;
		private $consulta;
		private $datos;

		public function __construct() {
			$this->con = new Conexion;
		}

        ////////////// SIMPLE CONSULTA //////////////////////
		public function seleccionar($campos, $tabla, $personalizar = false, $resto_cons = "") {
			$this->consulta = "SELECT ".join(", ", $campos)." FROM ".$tabla;
			if( $personalizar == true && $resto_cons != "") {
				$this->consulta .= " ".$resto_cons;
			}
		}

		public function insertar($tabla, $columnas, $valores){
			$val = array();
			for ($i=0; $i < count($valores); $i++) { 
				array_push($val, "'".utf8_decode($valores[$i])."'");
			}
			$this->consulta = "INSERT INTO ".$tabla." (".join(", ", $columnas).") VALUES (".join(", ", $val).")";
		}

		public function actualizar($tabla, $columnas, $valores, $condicion){
            
			$this->consulta = "UPDATE ".$tabla." SET ";
			$longitud = count($columnas);

			for($i = 0; $i < $longitud; $i++) {
				
				$this->consulta .= $columnas[$i]." = '".utf8_decode($valores[$i])."'";

				if($i < ($longitud - 1)) {
					$this->consulta .= ", ";
				}
			}

			$this->consulta .= $condicion;
		}

		public function eliminar($tabla, $condicion) {
			$this->consulta = "DELETE FROM ".$tabla." WHERE ".$condicion;			
		}

		# Adicionales
		public function limite($indice, $limite = 0) {
			$lim = " limit ".$indice;

			if($limite > 0) {
				$lim .= ", ".$limite;
			}

			return $lim;
		}

		public function getConsulta() {
			return $this->consulta;
		}

        
        public function EjecutarConsulta($consult) {
        	if(!$result = $this->con->ConsultaBD($consult)){
               echo "Ha ocurrido un error [:(]";
        	}
        	return $result;
		}

	}

	$objetoConsulta = new Construir();
	
?>