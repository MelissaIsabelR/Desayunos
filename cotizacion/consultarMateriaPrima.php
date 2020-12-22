<?php include_once("conexion/constructConsultas.php"); ?>
<?php 
/*consultar en la vista de regustrarse los tipos de documentos*/
$tabla = "desaymate";
$campos = array("*");
//$condicion="WHERE usuarios.USUDOCUM=".$_POST['varDocumento']."";
$objetoConsulta->seleccionar($campos, $tabla, false);
$consultarMater = $objetoConsulta->getConsulta();
$resulMater = $objetoConsulta->EjecutarConsulta($consultarMater);
