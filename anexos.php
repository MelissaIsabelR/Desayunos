<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<?php
include("menuNavegacion.html");
include_once("anexos/consultarAnexos.php");
?>


<title>Document</title>
</head>
<body>

<table border='2px'>
    <th>CODIGO</th>
    <th>NOMBRE</th>
    <th>VALOR</th>
    <th>ESTADO</th>
    <th>ACCIONES</th>
     

<?php 
while($rowAnexos = mysqli_fetch_array($resultAnexos)){ 			 
    ?>
    <tr>
    <td><?php echo $desaycodi = utf8_encode($rowAnexos["desaycodi"]); ?></td>
    <td><?php echo $desaynomb = utf8_encode($rowAnexos["desaynomb"]); ?></td>
    <td><?php echo $desayvalor = $rowAnexos["desayvalor"]; ?></td>
    <td><?php echo $desayesta = utf8_encode($rowAnexos["desayesta"]); ?></td>
    <td></td>
    </tr>
    <?php
  }
?>
</table> 
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>