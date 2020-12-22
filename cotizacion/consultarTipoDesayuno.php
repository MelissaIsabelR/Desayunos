<?php include_once("conexion/constructConsultas.php"); ?>
<?php 
/*consultar en la vista de regustrarse los tipos de documentos*/
$tabla = "desaytipo";
$campos = array("*");
//$condicion="WHERE usuarios.USUDOCUM=".$_POST['varDocumento']."";
$objetoConsulta->seleccionar($campos, $tabla, false);
$consultarTipoDesay = $objetoConsulta->getConsulta();
$resulTipoDesay = $objetoConsulta->EjecutarConsulta($consultarTipoDesay);
