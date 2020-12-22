<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<?php
include("menuNavegacion.html");
include_once("materiaPrima/consultarMateriaPrima.php");
?>


<title>Document</title>
</head>
<body>

<table border='2px'>
    <thead>
    <th>CODIGO</th>
    <th>TIPO</th>
    <th>MATERIA PRIMA</th>
    <th>MANO DE OBRA</th>
    <th>PORCENTAJE</th>
    <th>ACCIONES</th>
    </thead>

<?php 
while($rowMateriaPrima = mysqli_fetch_array($resulMater)){ 			 
    ?>
    <tr>
    <td><?php echo $desaycodi = utf8_encode($rowMateriaPrima["desaycodi"]); ?></td>
    <td><?php echo $desaytipo = utf8_encode($rowMateriaPrima["desaytipo"]); ?></td>
    <td><?php echo $desaymate = $rowMateriaPrima["desaymate"]; ?></td>
    <td><?php echo $desaymano = $rowMateriaPrima["desaymano"]; ?></td>
    <td><?php echo $desayporc = $rowMateriaPrima["desayporc"]; ?></td>
    <td></td>
    </tr>
    <?php
  }
?>
</table> 
</body>
<script src="bootstrap/js/bootstrap.min.js"></script>

</html>