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
?>
<title>Document</title>
<style>
  table{
    display:inline-block;
     
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
        <td colspan=2>MENU FIT</td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-menu">+</button></td>
      </tr>
        <tr>
        <th>MODELO</th>
        <th>OPCIONES</th>
        <th>ACCIONES</th>
        </tr>
      </tr>

        <tr><td rowspan=10>----</td></tr>
        
        <tr>
          <td>dfsd</td>
          <td><button class="EliminarBotonMenu">-</button></td>
        </tr>
        <tr>
          <td>sdfsdf</td>
          <td><button class="EliminarBotonMenu">-</button></td>
        </tr>
        <tr>
          <td>sfds</td>
          <td><button class="EliminarBotonMenu">-</button></td>
        </tr>
      </tr>
    </table>

    <table id="tablaBebida" border='2'>
      <tr>
        <td colspan=2>BEBIDA FIT</td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-bebida">+</button></td>
      </tr>
        <tr>
        <th>MODELO</th>
        <th>OPCIONES</th>
        <th>ACCIONES</th>
        </tr>
      </tr>

        <tr><td rowspan=10>----</td></tr>
        
        <tr>
          <td>dfsd</td>
          <td><button class="EliminarBotonBebida">-</button></td>
        </tr>
        <tr>
          <td>sfds</td>
          <td><button class="EliminarBotonBebida">-</button></td>
        </tr>
      </tr>
    </table>

    <table id="tablaAcompanamiento" border='2'>
      <tr>
        <td colspan=2>ACOMPAÑAMIENTO FIT</td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-acompanamiento">+</button></td>
      </tr>
        <tr>
        <th>MODELO</th>
        <th>OPCIONES</th>
        <th>ACCIONES</th>
        </tr>
      </tr>

        <tr><td rowspan=10>----</td></tr>
        
        <tr>
          <td>dfsd</td>
          <td><button class="EliminarBotonAcompanamiento">-</button></td>
        </tr>
        <tr>
          <td>sfds</td>
          <td><button class="EliminarBotonAcompanamiento">-</button></td>
        </tr>
      </tr>
    </table>
    
    <div>
      <textarea name="" id="" cols="100" rows="2"></textarea>
    </div>

    </div>
  </div>

  <!-- ----------------------------------------------- -->

  <div class="modal fade bs-example-modal-lg-menu" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close add" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Tipo Desayuno</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        
         <button type="button" class="btn btn-primary addMenu" >1</button>
         <button type="button" class="btn btn-primary addMenu" >2</button>
         <button type="button" class="btn btn-primary addMenu" >3</button>
         <button type="button" class="btn btn-primary addMenu" >4</button>
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
        <h4 class="modal-title" id="gridSystemModalLabel">Tipo Desayuno</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        
         <button type="button" class="btn btn-primary addBebida" >1</button>
         <button type="button" class="btn btn-primary addBebida" >2</button>
         <button type="button" class="btn btn-primary addBebida" >3</button>
         <button type="button" class="btn btn-primary addBebida" >4</button>
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
        
         <button type="button" class="btn btn-primary addAcompanamiento" >1</button>
         <button type="button" class="btn btn-primary addAcompanamiento" >2</button>
         <button type="button" class="btn btn-primary addAcompanamiento" >3</button>
         <button type="button" class="btn btn-primary addAcompanamiento" >4</button>
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

<script src="bootstrap/js/bootstrap.min.js"></script>


<script>

idMenuGenerado=0;
$('.addMenu').click(function () {
    idMenuGenerado=idMenuGenerado+1;
    $('#tablamenu').append('<tr id="filamenu'+idMenuGenerado+'"><td>'+idMenuGenerado+'</td><td><button id="boton-menu'+idMenuGenerado+'"" onclick="EliminarFila(this.id)">-</button></td></tr>');
});

idBebidaGenerado=0;
$('.addBebida').click(function () {
    idBebidaGenerado=idBebidaGenerado+1;
    $('#tablaBebida').append('<tr id="filaBebida'+idBebidaGenerado+'"><td>'+idBebidaGenerado+'</td><td><button id="boton-Bebida'+idBebidaGenerado+'"" onclick="EliminarFila(this.id)">-</button></td></tr>');
});

idBebidAcompanamiento=0;
$('.addAcompanamiento').click(function () {
    idBebidAcompanamiento=idBebidAcompanamiento+1;
    $('#tablaAcompanamiento').append('<tr id="filamenu'+idBebidAcompanamiento+'"><td>'+idBebidAcompanamiento+'</td><td><button id="boton-menu'+idBebidAcompanamiento+'"" onclick="EliminarFila(this.id)">-</button></td></tr>');
});


$('.EliminarBotonMenu').click(function () {
        $(this).closest('tr').remove();        
});

$('.EliminarBotonBebida').click(function () {
        $(this).closest('tr').remove();        
});


$('.EliminarBotonAcompanamiento').click(function () {
        $(this).closest('tr').remove();        
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