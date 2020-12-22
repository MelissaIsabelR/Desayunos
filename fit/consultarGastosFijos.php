<?php include_once("conexion/constructConsultas.php"); ?>
<?php 
/*consultar en la vista de regustrarse los tipos de documentos*/
$tabla = "desayserv";
$campos = array("*");
$objetoConsulta->seleccionar($campos, $tabla, false);
//SERVICIOS
$consultarServicios = $objetoConsulta->getConsulta();
$resulServicios = $objetoConsulta->EjecutarConsulta($consultarServicios);


// $tabla2 = "desayserv";
// $campos2 = array("SELECT SUM(desayserv.desayvalo) as SUMA");
// $objetoConsulta->seleccionar($campos2, $tabla2, false);
// //SERVICIOS
// $SumaServicios = $objetoConsulta->getConsulta();
// $resulSumaServicios = $objetoConsulta->EjecutarConsulta($SumaServicios);

