<?php include_once("conexion/constructConsultas.php"); ?>
<?php 
/*consultar en la vista de regustrarse los tipos de documentos*/
$tabla = "desayserv";
$campos = array("*");
//$condicion="WHERE usuarios.USUDOCUM=".$_POST['varDocumento']."";
$objetoConsulta->seleccionar($campos, $tabla, false);
$consultarServic = $objetoConsulta->getConsulta();
$resultServic = $objetoConsulta->EjecutarConsulta($consultarServic);
