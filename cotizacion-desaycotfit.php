<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    
<?php
include("menuNavegacion.html");
include_once("tipoDesayuno/consultarTipoDesayuno.php");
include_once("fit/consultarMenu.php");
include_once("fit/consultarMenusNuevos.php");
include_once("fit/consultarGastosFijos.php");
?>

<title>Document</title>
<style>
  table{
    display:inline-block;
    width:33% !important;
     
  }
</style>
</head>
<body>
  <div class="container">
    <div class="row">

  <select name="" id="SeleccionDesay">
  <option>Seleccione</option>
  <?php 
  while($rowTipoDesay = mysqli_fetch_array($resulTipoDesay)){ 			 
      ?>
      <option  value="cotizacion-<?php echo $desaytabla = utf8_encode($rowTipoDesay["desaytabla"]); ?>.php"><?php echo $desaynomb = utf8_encode($rowTipoDesay["desaynomb"]); ?></option>
      <?php
    }
    $rowspanMenu=10;
  ?>
  </select>
  
<br><br>
    <table id="tablamenu" border='2'>
      <tr>
        <td colspan=3>MENU FIT</td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-menu">+</button></td>
      </tr>
        <tr>
        <th>OPCIONES</th>
        <th>VALOR</th>
        <th>ACCIONES</th>
        <th>---</th>
        </tr>
      </tr>
        <?php 
         while($rowMenuFit = mysqli_fetch_array($resulMenuFit)){ 	
           if($rowMenuFit["TIPO_PRODUCTO"]=="PLATOS FUERTES"){
             $ArrayMenusDefecto[]=$rowMenuFit["MENU"];
            ?>
           <tr>
            <td><?php echo $rowMenuFit["MENU"] ?></td>
            <td><?php echo $rowMenuFit["VALOR"] ?></td>
            <td><button class="EliminarBotonMenu" value="<?php echo $rowMenuFit["CODIGO"] ?>">-</button></td>
            <td><input type="radio" class="RadioMenu" name="RadioMenu" data-value="<?php echo $rowMenuFit["MENU"]."-".$rowMenuFit["VALOR"] ?>" ></input></td>
          </tr>
        <?php
           }		 
        }		 
        ?>
    </table>

    <table id="tablaBebida" border='2'>
      <tr>
        <td colspan=2>BEBIDA FIT</td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-bebida">+</button></td>
      </tr>
        <tr>
        <th>OPCIONES</th>
        <th>VALOR</th>
        <th>ACCIONES</th>
        </tr>
      </tr>

        <?php 
         while($rowBebidaFit = mysqli_fetch_array($resulBebidaFit)){ 	
           if($rowBebidaFit["TIPO_PRODUCTO"]=="BEBIDAS"){
            $ArrayFitDefecto[]=$rowBebidaFit["MENU"];
            ?>
           <tr>
            <td><?php echo $rowBebidaFit["MENU"] ?></td>
            <td><?php echo $rowBebidaFit["VALOR"] ?></td>
            <td><button class="EliminarBotonBebida">-</button></td>
            <td><input type="radio" class="RadioBebida" name="RadioBebida" data-value="<?php echo $rowBebidaFit["MENU"]."-".$rowBebidaFit["VALOR"] ?>" ></input></td>
          </tr>
        <?php
           }		 
        }		 
        ?>
    </table>

    <table id="tablaAcompanamiento" border='2'>
      <tr>
        <td colspan=2>ACOMPAÑAMIENTO FIT</td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-acompanamiento">+</button></td>
      </tr>
        <tr>
        <th>OPCIONES</th>
        <th>VAOR</th>
        <th>ACCIONES</th>
        </tr>
      </tr>

        <?php
        $contAcompana=0; 
         while($rowAcompanamientoFit = mysqli_fetch_array($resulAcompanamientoFit)){ 	
           if($rowAcompanamientoFit["TIPO_PRODUCTO"]=="DULCES" or $rowAcompanamientoFit["TIPO_PRODUCTO"]=="POSTRES" ){
            $ArrayAcompanamDefecto[]=$rowAcompanamientoFit["MENU"];
            $contAcompana++;
            ?>
           <tr>
            <td><?php echo $rowAcompanamientoFit["MENU"] ?></td>
            <td><?php echo $rowAcompanamientoFit["VALOR"] ?></td>
            <td><button class="EliminarBotonAcompanamiento">-</button></td>
            <td><input type="checkbox" class="RadioAcompanamiento" name="RadioAcompanamiento" data-value="<?php echo $rowAcompanamientoFit["MENU"]."-".$rowAcompanamientoFit["VALOR"]."-".$contAcompana ?>" ></input></td>
          </tr>
        <?php
           }		 
        }		 
        ?>
        
  </table>
    <table class="table" id="MenuGenerado">
    
    </table>

    <table class="table" id="BebidaGenerado">
    
    </table>

    <table class="table" id="AcompanamientoGenerado">
    <tr>
    <td>Menu<td>
    <td>Valor<td>
    </tr>
    </table>
    <button type="button" class="btn btn-primary"   onclick="sumarMenu()">Sumar</button>
    

    <!-- TABLA DE PRECIOS DESAYUNO -->

    <table class="table-bordered">
        <thead>
        <th>Servicio</th>
        <th>Valor</th>
        </thead>
        <tr>
        <td>ALIMENTOS</td>
        <td id="valorAlimGenerado"></td>
        </tr>
        <tr>
        <td>MATERIA PRIMA</td>
        <td id="valorMpGenerado">12600</td>
        </tr>

        <tr>
        <td>MANO DE OBRA</td>
        <td id="valorMoGenerado">4000</td>
        </tr>
        <?php
        $SUMA=0;
         while($rowServicios = mysqli_fetch_array($resulServicios)){
              //$SUMA+=$rowServicios["desayvalo"]+0;
              ?>
              <tr>
              <td><?php echo $rowServicios["desaynomb"];?></td>
              <td id="Servi<?php echo$rowServicios["desaynomb"];?>"><?php echo $rowServicios["desayvalo"];?></td>
              
              </tr>
              <?php

          
        }
       

         	
        	 
        ?>
        <tr>
        <td><b>TOTAL</b></td>
        <td id="ValorTotal1"></td>
        </tr>

        <tr>
        <td><b>PORCENTAJE</b></td>
        <td>40%</td>
        </tr>

        <tr>
        <td><b>VALOR UTILIDAD</b></td>
        <td id="ValorUtilidad"></td>
        </tr>

        <tr>
        <td><b>TOTAL DESAYUNO</b></td>
        <td id="ValorDesayuno"></td>
        </tr>
        </table>
        
    </div>
  </div>

  <!-- ----------------------------------------------- -->

  <div class="modal fade bs-example-modal-lg-menu" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close add" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Agregar Nuevo Menu</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        <table class="table-bordered">
        <thead>
        <th>PRODUCTO</th>
        <th>AGREGAR</th>
        </thead>
        <?php
        //SABER IGUAL O DIFERENTE
        //  $array1=["Tablitas","Sandwich","Panqueque","Waffle","creps"];
        //  $array2=["Tablitas","Sandwich","Panqueque"];
        //   $contador=0;
        //  for($i=0;$i<count($array1);$i++){
        //    for($j=0;$j<count($array2);$j++){
        //     if($array1[$i]==$array2[$j]){
        //     }else{
        //      echo $contador++;
        //       if($contador==count($array2)){
        //         echo $array1[$i];
        //         //$array3=$array1($i);
        //       }
        //     }
        //    }
        //    $contador=0;
        //  }


        $contadorIgual=0;
         while($rowMenuFitNuevos = mysqli_fetch_array($resulMenuFitNuevos)){
           if (isset($ArrayMenusDefecto)){
            for($j=0; $j<count($ArrayMenusDefecto);$j++){
              if($rowMenuFitNuevos["TIPO_PRODUCTO"]=="PLATOS FUERTES"){
                        
              if($rowMenuFitNuevos["NOMBRE_PRODUCTO"]==$ArrayMenusDefecto[$j]){
                    }else{
                      $contadorIgual++;
                      if($contadorIgual==count($ArrayMenusDefecto)){

                        ?>
                        <tr>
                        <td><?php echo $rowMenuFitNuevos["NOMBRE_PRODUCTO"];?></td>
                        
                      <td><button type="button" class="btn btn-primary addMenu" data-campo="<?php echo $rowMenuFitNuevos["NOMBRE_PRODUCTO"];?>" value="<?php echo $rowMenuFitNuevos["CODIGO"];?>"  data-valor="<?php echo $rowMenuFitNuevos["VALOR"];?>">+</button></td>
                      </tr>
                      <?php
                      }
                    }
              }
            
          }
          $contadorIgual=0;
         }else{
          while($rowMenuFitNuevos = mysqli_fetch_array($resulMenuFitNuevos)){
            if($rowMenuFitNuevos["TIPO_PRODUCTO"]=="PLATOS FUERTES"){
              ?>
              <tr>
              <td><?php echo $rowMenuFitNuevos["NOMBRE_PRODUCTO"];?></td>

              <td><button type="button" class="btn btn-primary addMenu" data-campo="<?php echo $rowMenuFitNuevos["NOMBRE_PRODUCTO"];?>" value="<?php echo $rowMenuFitNuevos["CODIGO"];?>" data-valor="<?php echo $rowMenuFitNuevos["VALOR"];?>">+</button></td>
              </tr>
              <?php

          }
        }
         }	
        }	 
        ?>
        </table>
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal menu -->


<div class="modal fade bs-example-modal-lg-bebida" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close add" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Agregar Nuevas Bebidas</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        <table class="table-bordered">
        <thead>
        <th>PRODUCTO</th>
        <th>AGREGAR</th>
        </thead>
        <?php

        $contadorBebidaIgual=0;
         while($rowBebidaFitNuevos = mysqli_fetch_array($resulBebidaFitNuevos)){
           for($j=0; $j<count($ArrayFitDefecto);$j++){
            if($rowBebidaFitNuevos["TIPO_PRODUCTO"]=="BEBIDAS"){
                      
            if($rowBebidaFitNuevos["NOMBRE_PRODUCTO"]==$ArrayFitDefecto[$j]){
                  }else{
                    $contadorBebidaIgual++;
                    if($contadorBebidaIgual==count($ArrayFitDefecto)){
                      ?>
                      <tr>
                      <td><?php echo $rowBebidaFitNuevos["NOMBRE_PRODUCTO"];?></td>
                     <td><button type="button" class="btn btn-primary addBebida" data-campo="<?php echo $rowBebidaFitNuevos["NOMBRE_PRODUCTO"];?>" data-valor="<?php echo $rowBebidaFitNuevos["VALOR"];?>">+</button></td>
                     </tr>
                     <?php
                    }
                  }
            }
            
          }
          $contadorBebidaIgual=0;
         }		 
        ?>
        </table>
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal bebida -->



<div class="modal fade bs-example-modal-lg-acompanamiento" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close add" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Tipo Desayuno</h4>
      </div>
      <div class="modal-body">
        <div class="row">

        <table class="table-bordered">
        <thead>
        <th>PRODUCTO</th>
        <th>AGREGAR</th>
        </thead>
        <?php
        $contadorAcompanaIgual=0;
         while($rowAcompanamientoFitNuevos = mysqli_fetch_array($resulAcompanamientoFitNuevos)){
           for($j=0; $j<count($ArrayAcompanamDefecto);$j++){
            if($rowAcompanamientoFitNuevos["TIPO_PRODUCTO"]!="PLATOS FUERTES" && $rowAcompanamientoFitNuevos["TIPO_PRODUCTO"]!="BEBIDAS"){
                      
            if($rowAcompanamientoFitNuevos["NOMBRE_PRODUCTO"]==$ArrayAcompanamDefecto[$j]){
                  }else{
                    $contadorAcompanaIgual++;
                    if($contadorAcompanaIgual==count($ArrayAcompanamDefecto)){
                      ?>
                      <tr>
                      <td><?php echo $rowAcompanamientoFitNuevos["NOMBRE_PRODUCTO"];?></td>
                     <td><button type="button" class="btn btn-primary addAcompanamiento" data-campo="<?php echo $rowAcompanamientoFitNuevos["NOMBRE_PRODUCTO"];?>" data-valor="<?php echo $rowAcompanamientoFitNuevos["VALOR"];?>">+</button></td>
                     </tr>
                     <?php
                    }
                  }
            }
            
          }
          $contadorAcompanaIgual=0;
         }		 
        ?>
        </table>
        <?php 
        //		 
        ?>
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal acompañamiento-->



        

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


<script>
function sumarMenu() {
var valores = 0;
var val=0;
var valorAcomp=0;

//VARIABLES//

var ServiINTERNET= parseInt($('#ServiINTERNET').html()); 
var ServiLUZ= parseInt($('#ServiLUZ').html()); 
var ServiAGUA= parseInt($('#ServiAGUA').html()); 
var valorMpGenerado= parseInt($('#valorMpGenerado').html()); 
var valorMoGenerado= parseInt($('#valorMoGenerado').html()); 

  var MenuGenerado = $('#MenuGenerado').find("td:last-child").text();
  var BebidaGenerado = $('#BebidaGenerado').find("td:last-child").text();
				$(".acompanam").parent("tr").find("td").each(function() {
            	// valores += parseInt($(this).html());
               
               if(val%2){
                valorAcomp+=parseInt($(this).html());
               }
               val++;
            ;
        });
       
  var arrayMenuGenerado = MenuGenerado.split("Valor"); 
  MenuuGenerado=parseInt(arrayMenuGenerado[1]);

  var arrayBebidaGenerado = BebidaGenerado.split("Valor"); 
  BebidaaGenerado=parseInt(arrayBebidaGenerado[1]);


  parseInt(AcompanamientoGenerado);
  TotalAlimentos=(MenuuGenerado+BebidaaGenerado+valorAcomp);
  $('#valorAlimGenerado').html(TotalAlimentos);
  Totalservicios=(ServiINTERNET+ServiAGUA+ServiLUZ);
 
  var total1= (valorMpGenerado+valorMoGenerado+Totalservicios+TotalAlimentos);
  $('#ValorTotal1').html(total1)
  TotalUtilidad=(total1*0.4);
  $('#ValorUtilidad').html(TotalUtilidad);
  TotalDesayuno=(TotalUtilidad+total1)
  $('#ValorDesayuno').html(TotalDesayuno);

}

idMenuGenerado=0;
$('.addMenu').click(function () {
  $(this).closest('tr').remove();
    idMenuGenerado=idMenuGenerado+1;
    var campo = $(this).data("campo");
    var valor = $(this).data("valor");
    //var value = this.value;
     $('#tablamenu').append('<tr id="filamenu'+idMenuGenerado+'"><td>'+campo+'</td></td><td>'+valor+'</td><td><button id="boton-menu'+idMenuGenerado+'"" onclick="EliminarFila(this.id)">-</button></tr>');
         $.ajax({
          url: "fit/updateEstados.php",
          type: "POST",
          //dataType: 'json',
          data: {
              
              'desaytabla' : 'desaymenu',
              'desaycampo' : this.value,
              'Opcion' : '1',
              'desayest' : 'A',

          },
          success: function(respuesta){ 
          // alert(respuesta)
          },error: function(respuesta){
          alert("error");
          }
           });
    this.disabled=true;
});

idBebidaGenerado=0;
$('.addBebida').click(function () {
    idBebidaGenerado=idBebidaGenerado+1;
    var campo = $(this).data("campo");
    var valor = $(this).data("valor");
    $('#tablaBebida').append('<tr id="filaBebida'+idBebidaGenerado+'"><td>'+campo+'</td><td>'+valor+'</td><td><button id="boton-Bebida'+idBebidaGenerado+'"" onclick="EliminarFila(this.id)">-</button></td></tr>');
    this.disabled=true;

});

idBebidAcompanamiento=0;
$('.addAcompanamiento').click(function () {
    idBebidAcompanamiento=idBebidAcompanamiento+1;
    var campo = $(this).data("campo");
    var valor = $(this).data("valor");
    $('#tablaAcompanamiento').append('<tr id="filamenu'+idBebidAcompanamiento+'"><td class="numero">'+campo+'</td><td class="numero">'+valor+'</td><td><button id="boton-menu'+idBebidAcompanamiento+'"" onclick="EliminarFila(this.id)">-</button></td></tr>');
    this.disabled=true;

});


$('.EliminarBotonMenu').click(function () {
         $.ajax({
          url: "fit/updateEstados.php",
          type: "POST",
          //dataType: 'json',
          data: {
              
              'desaytabla' : 'desaymenu',
              'desaycampo' : this.value,
              'desayest' : 'I',
              'Opcion' : '2',
          },
          success: function(respuesta){ 
            //alert(respuesta)
          },error: function(respuesta){
          //alert("error");
          }
           });
  $(this).closest('tr').remove();

});

$('.EliminarBotonBebida').click(function () {
        $(this).closest('tr').remove();        
});


$('.EliminarBotonAcompanamiento').click(function () {
        $(this).closest('tr').remove();        
}); 
     var varCheckSelect=0;

$('.RadioMenu').change(function () {
    if(this.checked) { 

      var OpcionMenu = $(this).data("value");
      var ValorAcumuladoAlimento = parseInt($('#TotalAlimentos').data("value"));
      varCheckSelect=varCheckSelect+1;
      alert(varCheckSelect);
       //alert(OpcionMenu)
       var arrayValorMenu = OpcionMenu.split("-"); 
       Menu=arrayValorMenu[0];
       ValorMenu=parseInt(arrayValorMenu[1]);
       $('#MenuGenerado').html('<tr><td>Menu</td><td>Valor</td></tr><tr><td>'+Menu+'</td><td>'+ValorMenu+'</td></tr>');
      
    } 

    

});


$('.RadioBebida').change(function () {
    if(this.checked) { 
     
      var OpcionBebida = $(this).data("value");
      var ValorAcumuladoAlimento = parseInt($('#TotalAlimentos').data("value"));

      var arrayValorBebida = OpcionBebida.split("-"); 
      Bebida=arrayValorBebida[0];
       ValorBebida=parseInt(arrayValorBebida[1]);
       $('#BebidaGenerado').html('<tr><td>Menu</td><td>Valor</td></tr><tr><td>'+Bebida+'</td><td>'+ValorBebida+'</td></tr>');
       
    } 
 
});

$('.RadioAcompanamiento').change(function () {
    if(this.checked) { 
     
      var OpcionAcompanamiento = $(this).data("value");
      var ValorAcumuladoAlimento = parseInt($('#TotalAlimentos').data("value"));
      var arrayValorAcompanamiento = OpcionAcompanamiento.split("-"); 
      Acompanamiento=arrayValorAcompanamiento[0];
       ValorAcompanamiento=parseInt(arrayValorAcompanamiento[1]);
       IdAcompanamiento=arrayValorAcompanamiento[2];
       
       $('#AcompanamientoGenerado').append('<tr id="'+IdAcompanamiento+'"><td>'+Acompanamiento+'</td><td class="acompanam">'+ValorAcompanamiento+'</td></tr>');
      
       
    } else{
   
      var OpcionAcompanamiento = $(this).data("value");
      var arrayValorAcompanamiento = OpcionAcompanamiento.split("-"); 
    
       IdAcompanamiento=arrayValorAcompanamiento[2];

      $('#'+IdAcompanamiento+'').closest('tr').remove();        

    }
 
});

function EliminarFila(valor){
        
        var arrayDeCadenas = valor.split("-");        
        $("#fila" + arrayDeCadenas[1]).remove();
        //alert("#fila" + arrayDeCadenas[1]);
        
}
// AJAX ---------------------------------


$('#SeleccionDesay').change(function () {
  
   
  mostrarTabla(this.value)
  // $.ajax({

  //     url: "json/cotizacionDesayunos/Tipo.php",
  //     type: "POST",
  //     dataType: 'json',
  //     data: {
          
  //         'desaytabla' : desaytabla,

  //     },
  //     success: function(respuesta){ 
  //       mostrarTabla(respuesta)
  //     },error: function(respuesta){
  //     alert("error");
  //     }
  // });
});

function mostrarTabla(tipo) {
  window.location.href = tipo


}

</script>
</body>
</html>