<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<?php
include("menuNavegacion.html");
include_once("productos/consultarProductos.php");
?>


<title>Document</title>
</head>
<body>

<table border='2px'>
    <th>CODIGO</th>
    <th>NOMBRE</th>
    <th>VALOR</th>
    <th>ESTADO</th>
    <th>TIPO PRODUCTO</th>
    <th>ACCIONES</th>
     

<?php 
while($rowPoductos = mysqli_fetch_array($resultProd)){ 			 
    ?>
    <tr>
    <td><?php echo $desaycodi = utf8_encode($rowPoductos["desaycodi"]); ?></td>
    <td><?php echo $desaynomb = utf8_encode($rowPoductos["desaynomb"]); ?></td>
    <td><?php echo $desayprov = $rowPoductos["desayprov"]; ?></td>
    <td><?php echo $desayesta = utf8_encode($rowPoductos["desayesta"]); ?></td>
    <td><?php echo $desaytipro = utf8_encode($rowPoductos["desaytipro"]); ?></td>
    <td></td>
    </tr>
    <?php
  }
?>
</table> 
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>