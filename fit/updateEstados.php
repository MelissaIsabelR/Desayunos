<?php //@session_start(); ?>
<?php include_once("../conexion/constructConsultas.php"); ?>
   
<?php 
//variables php
$codigo= $_POST["desaycampo"];
$tablaUpdate=$_POST["desaytabla"];
$valor=$_POST["desayest"];
$Opcion=$_POST["Opcion"];


// $USUIMAGE_;

$tabla = "desaymenu";
$campos = array("*");
$condicion="where desaymenu.desaytide=3 and desayprme=".$codigo;
$objetoConsulta->seleccionar($campos, $tabla, true,$condicion);
//MENU
$consultarExistencia = $objetoConsulta->getConsulta();
$resulExistencia = $objetoConsulta->EjecutarConsulta($consultarExistencia);
$swExistencia=0;
while($rowExistente = mysqli_fetch_array($resulExistencia)){ 
    $swExistencia=1;			 
    $rowExistente["desayest"];  
}

if ($Opcion==1) {
   if($swExistencia==0){
    $tabla = "desaymenu";
    $campos = array("desaytide","desayprme","desayest");
    
    $valores = array(3,$codigo,"A");
    
    $objetoConsulta->insertar($tabla, $campos, $valores);
    $ResultNuevoMenu = $objetoConsulta->getConsulta();
    
    $result = $objetoConsulta->EjecutarConsulta($ResultNuevoMenu);
    
    if ($result) {
     echo "ok";
      
    }else{
     echo "error";
    }
   }else{
    $tabla = 'desaymenu';
    $campos = array("desayest");

    $valores = array('A');

    $condicion = " WHERE desayprme = $codigo AND desaytide=3";


    $objetoConsulta->actualizar($tabla, $campos, $valores, $condicion);
        $dt = $objetoConsulta->getConsulta();

        $result = $objetoConsulta->EjecutarConsulta($dt);

    if ($result) {
    echo "ok";

    }else{
    echo "error";
    }
   }
}else{
    $tabla = $tablaUpdate;
    $campos = array("desayest");

    $valores = array($valor);

     $condicion = " WHERE desaycodi = ".$codigo."";

    $objetoConsulta->actualizar($tabla, $campos, $valores, $condicion);
        $dt = $objetoConsulta->getConsulta();

        $result = $objetoConsulta->EjecutarConsulta($dt);

    if ($result) {
    echo "ok";

    }else{
    echo "error";
    }

    
}




