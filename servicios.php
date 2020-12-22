<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<?php
include("menuNavegacion.html");
include_once("servicios/consultarServicios.php");
?>


<title>Document</title>
</head>
<body>

<table border='2px'>
    <thead>
    <th>CODIGO</th>
    <th>AGUA</th>
    <th>LUZ</th>
    <th>INTERNET</th>
    <th>ACCIONES</th>
    </thead>

<?php 
while($rowServicios = mysqli_fetch_array($resultServic)){ 			 
    ?>
    <tr>
    <td><?php echo $desaycodi = utf8_encode($rowServicios["desaycodi"]); ?></td>
    <td><?php echo $desayagua = utf8_encode($rowServicios["desayagua"]); ?></td>
    <td><?php echo $desayuluz = $rowServicios["desayuluz"]; ?></td>
    <td><?php echo $desayinte = $rowServicios["desayinte"]; ?></td>
    <td></td>
    </tr>
    <?php
  }
?>
</table> 
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>