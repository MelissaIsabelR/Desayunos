<?php //@session_start(); ?>
<?php include_once("../../conexion/constructConsultas.php"); ?>
<?php 
/*consultar en la vista de regustrarse los tipos de documentos*/
$tabla = "desaytipo";
$campos = array("*");
$condicion="WHERE desaytipo.desaytabla='".$_POST['desaytabla']."'";
$objetoConsulta->seleccionar($campos, $tabla, true, $condicion);
$consultarUsuariosPorDocumento = $objetoConsulta->getConsulta();
$resultUsuariosPorDocumento = $objetoConsulta->EjecutarConsulta($consultarUsuariosPorDocumento);
 
 while($rowUsuariosPorDocumento = mysqli_fetch_array($resultUsuariosPorDocumento)){ 
  
    $datos = array(
    'desaycodig' => $rowUsuariosPorDocumento['desaycodig'],
    'desaynomb' => $rowUsuariosPorDocumento['desaynomb']
     
    
    );
}

//Devolvemos el array pasado a JSON como objeto
echo json_encode($datos);
//Devolvemos el array pasado a JSON como objeto
 
?>


