<?php include_once("../../conexion/constructConsultas.php"); ?>
<?php 
/*consultar en la vista de regustrarse los tipos de documentos*/
$tabla = "usuarios";
$campos = array("USUDOCUM","USUNOMBR","USUAPELL");
$condicion="WHERE usuarios.USUDOCUM=".$_POST['varDocumento']."";
$objetoConsulta->seleccionar($campos, $tabla, true, $condicion);
$consultarDocumento = $objetoConsulta->getConsulta();
$resultDocumento = $objetoConsulta->EjecutarConsulta($consultarDocumento);
while($rowDocumento = mysqli_fetch_array($resultDocumento)){ 			 
  echo $Nombre ="Usuario: ". utf8_encode($rowDocumento["USUNOMBR"])." ".utf8_decode($rowDocumento["USUAPELL"]);  
}