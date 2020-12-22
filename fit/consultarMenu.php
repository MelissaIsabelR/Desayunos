<?php include_once("conexion/constructConsultas.php"); ?>
<?php 
/*consultar en la vista de regustrarse los tipos de documentos*/
$tabla = "desaytipro";
$campos = array("desayprme.desaynomb AS MENU, desayprme.desayvalo AS VALOR, desaytipro.desaynomb AS TIPO_PRODUCTO,
desaytipo.desaynomb  TIPO_DESAYUNO, desaymenu.desaycodi AS CODIGO");
$condicion="inner join desayprme on desaytipro.desaycodi=desayprme.desaytipr inner join desaymenu on desayprme.desaycodi=desaymenu.desayprme inner join desaytipo on desaymenu.desaytide=desaytipo.desaycodig WHERE desaymenu.desaytide=3 AND desayest='A'";
$objetoConsulta->seleccionar($campos, $tabla, true,$condicion);
//MENU
$consultarMenuFit = $objetoConsulta->getConsulta();
$resulMenuFit = $objetoConsulta->EjecutarConsulta($consultarMenuFit);
//BEBIDA
$consultarBebidaFit = $objetoConsulta->getConsulta();
$resulBebidaFit = $objetoConsulta->EjecutarConsulta($consultarBebidaFit);
//ACOMPAÑAMIENTO
$consultarAcompanamientoFit = $objetoConsulta->getConsulta();
$resulAcompanamientoFit = $objetoConsulta->EjecutarConsulta($consultarAcompanamientoFit);
