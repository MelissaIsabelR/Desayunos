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
</head>
<body>

<select name="" id="SeleccionDesay">
<option>Seleccione</option>
<?php 
while($rowTipoDesay = mysqli_fetch_array($resulTipoDesay)){ 			 
    ?>
    <option  value="<?php echo $desaytabla = utf8_encode($rowTipoDesay["desaytabla"]); ?>"><?php echo $desaynomb = utf8_encode($rowTipoDesay["desaynomb"]); ?></option>
    <?php
  }
  $rowspanMenu=10;
?>
</select>
<div id="tablaTipoDesay">
<table border=2px>
    <thead>
    <th>MODELO</th>
    <th>PRODUCTO</th>
    <th>OPCIONES</th>
    </thead>
    <tbody>
        <tr>
        <td rowspan="20"></td>
        </tr>
        <tr>
            <td id="filaMenu" rowspan="4">MENÚ 
            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-menu">+</button></td>

        </td>
         </tr>
        <tr>
            <td>dfsdfs <button class="EliminarBotonMenu">-</button></td>
         </tr>
        <tr>
            <td>dfsdfs <button class="EliminarBotonMenu">-</button></td>
         </tr>
         <tr>
            <td>dfsdfs <button class="EliminarBotonMenu">-</button></td>
         </tr>
        
        <tr id="addMenus">
            
        </tr>

        <tr>
        <td id="filaBebida" rowspan="3">BEBIDA </td>
         <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-bebida">+</button></td>
        </tr>

        <tr>
           
            <td>dfsdfs <button class="EliminarBotonBebida">-</button></td>
 
        </tr>
        <tr>
            <td>dfsdfs <button class="EliminarBotonBebida">-</button></td>
 
        </tr>
        <tr id="addBebida">
            
        </tr>

        <tr>
            <td id="filaAcompanamiento" rowspan="3">ACOMPAÑAMIENTO</td>
            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-acompanamiento">+</button>  
        </tr>
        <tr>
            <td>dfsdfs <button class="EliminarBotonAcompa">-</button></td>
 
        </tr>
        <tr>
            <td>dfsdfs <button class="EliminarBotonAcompa">-</button></td>
 
        </tr>
         <tr id="addAcompanamiento">
            
        </tr>
        
        <tr>
            <td>VALOR</td>
            <td>$ </td>
        </tr>
       

    </tbody>
    </table>
</div>



<!-- ------------------MODAL--------------------------- -->


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

<script src="js/jquery.min.js"></script>
<script src="js/jquery-3.1.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script>
    function irTabla(valor) {
        alert(valor);
    }

    idMenuGenerado=0;

    $('.addMenu').click(function () {
      var ValorRowspan=$('#filaMenu').attr('rowspan');
suma=parseInt(ValorRowspan)+1;
nuevaRow=suma;
alert(nuevaRow)
        
        $('#filaMenu').attr('rowspan',nuevaRow);


       
        idMenuGenerado=idMenuGenerado+1;
        $('table').append('<tr id="filamenu'+idMenuGenerado+'"><td>'+idMenuGenerado+' <button id="boton-menu'+idMenuGenerado+'"" onclick="EliminarFila(this.id)">-</button></td></tr>');
      

         
    });
   
    idBebidaGenerado=0;
    $('.addBebida').click(function () {
      var ValorRowspan=$('#filaBebida').attr('rowspan');
        if(ValorRowspan==3){
          $('#filaBebida').attr('rowspan',4);
         }else if(ValorRowspan<3){
          ValorRowspan=ValorRowspan+1;
         }
         idBebidaGenerado=idBebidaGenerado+1;
        $('#addBebida').append('<tr id="filabebida'+idBebidaGenerado+'"><td>'+idBebidaGenerado+' <button id="boton-bebida'+idBebidaGenerado+'"" onclick="EliminarFila(this.id)">-</button></td></tr>');
    });

    idAcompaGenerado=0;
    $('.addAcompanamiento').click(function () {
      var ValorRowspan=$('#filaAcompanamiento').attr('rowspan');
        if(ValorRowspan==3){
          $('#filaAcompanamiento').attr('rowspan',4);
         }else if(ValorRowspan<3){
          ValorRowspan=ValorRowspan+1;
         }
        idAcompaGenerado=idAcompaGenerado+1; 
        $('#addAcompanamiento').append('<tr id="filaacompanamiento'+idAcompaGenerado+'"><td>'+idAcompaGenerado+' <button id="boton-acompanamiento'+idAcompaGenerado+'"" onclick="EliminarFila(this.id)">-</button></td></tr>');
    });

    $('.EliminarBotonMenu').click(function () {
        $(this).closest('tr').remove();
       var varowspan= $('#filaMenu').attr('rowspan'); 
       resta=varowspan-1;
       var varowspan= $('#filaMenu').attr('rowspan', resta); 
       alert($('#filaMenu').attr('rowspan')); 

        
    });

    $('.EliminarBotonBebida').click(function () {
        $(this).closest('tr').remove();
       var varowspan= $('#filaBebida').attr('rowspan'); 
       resta=varowspan-1;
       var varowspan= $('#filaBebida').attr('rowspan', resta); 

        
    });

    $('.EliminarBotonAcompa').click(function () {
        $(this).closest('tr').remove();
       var varowspan= $('#filaAcompanamiento').attr('rowspan'); 
       resta=varowspan-1;
       var varowspan= $('#filaAcompanamiento').attr('rowspan', resta); 

        
    });

    function EliminarFila(valor){
        
        var arrayDeCadenas = valor.split("-");        
        $("#fila" + arrayDeCadenas[1]).remove();
        //alert("#fila" + arrayDeCadenas[1]);
        
    }
  

    $('#SeleccionDesay').change(function () {
           	 
               desaytabla = this.value; 
               alert(desaytabla);
               
               $.ajax({
   
                   url: "json/cotizacionDesayunos/Tipo.php",
                   type: "POST",
                   dataType: 'json',
                   data: {
                      
                       'desaytabla' : desaytabla,
   
                   },
                   success: function(respuesta){ 
                     mostrarTabla(respuesta)
                   },error: function(respuesta){
                   alert("error");
                   }
               });
             });

    function mostrarTabla(respuesta) {
    $('#tablaTipoDesay').html(
        "<table border=2px><thead><th>PRODUCTO</th><th>OPCIONES</th></thead></table>"
        )
    alert(respuesta.desaynomb);	 
    alert(respuesta.desaycodig);


    }
              
</script>
</body>
<script src="bootstrap/js/bootstrap.min.js"></script>

</html>
