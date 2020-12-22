<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<?php
include("menuNavegacion.html");
include_once("tipoProductos/consultarTiproductos.php");
?>


<title>Document</title>
</head>
<body>

<table border='2px'>
    <thead>
    <th>CODIGO</th>
    <th>NOMBRE</th>
    <th>ESTADO</th>
    <th>ACCIONES</th>
    </thead>

<?php 
while($rowTiproductos = mysqli_fetch_array($resultTiprod)){ 			 
    ?>
    <tr>
    <td><?php echo $desaycodi = utf8_encode($rowTiproductos["desaycodi"]); ?></td>
    <td><?php echo $desaynomb = utf8_encode($rowTiproductos["desaynomb"]); ?></td>
    <td><?php echo $desayesta = $rowTiproductos["desayesta"]; ?></td>
    <td></td>
    </tr>
    <?php
  }
?>
</table> 
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>