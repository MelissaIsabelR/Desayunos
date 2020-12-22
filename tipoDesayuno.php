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

<table border='2px'>
    <thead>
    <th>CODIGO</th>
    <th>NOMBRE</th>
    <th>ACCIONES</th>
    
    </thead>

<?php 
while($rowTipoDesay = mysqli_fetch_array($resulTipoDesay)){ 			 
    ?>
    <tr>
    <td><?php echo $desaycodig = utf8_encode($rowTipoDesay["desaycodig"]); ?></td>
    <td><?php echo $desaynomb = utf8_encode($rowTipoDesay["desaynomb"]); ?></td>
    
    <td></td>
    </tr>
    <?php
  }
?>
</table> 
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>