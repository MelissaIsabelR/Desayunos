<?php include_once("conexion/constructConsultas.php"); ?>
<?php 
/*consultar en la vista de regustrarse los tipos de documentos*/
$tabla = "desaytipro";
$campos = array("desaytipro.desaynomb as TIPO_PRODUCTO,desayprme.desaynomb AS NOMBRE_PRODUCTO, desayprme.desayvalo AS VALOR,desayprme.desaycodi AS CODIGO");
$condicion="desaytipro inner join desayprme on desaytipro.desaycodi=desayprme.desaytipr";
$objetoConsulta->seleccionar($campos, $tabla, true,$condicion);
//MENU
$consultarMenuFitNuevos = $objetoConsulta->getConsulta();
$resulMenuFitNuevos = $objetoConsulta->EjecutarConsulta($consultarMenuFitNuevos);
//BEBIDA
$consultarBebidaFitNuevos = $objetoConsulta->getConsulta();
$resulBebidaFitNuevos = $objetoConsulta->EjecutarConsulta($consultarBebidaFitNuevos);
//ACOMPAÑAMIENTO
$consultarAcompanamientoFitNuevos = $objetoConsulta->getConsulta();
$resulAcompanamientoFitNuevos = $objetoConsulta->EjecutarConsulta($consultarAcompanamientoFitNuevos);
