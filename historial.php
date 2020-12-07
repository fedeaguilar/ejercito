<?php

require_once ("conexion/conexion.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1 align="center">Mis Ataques</h1>
<table width="70%" border="1px" >

<tr align="center">
    <td>Mi Ejercito</td>
    <td>Ejercito Contrincante</td>
    <td>Resultado</td> 

    
</tr>
<?php 
    $consulta ="SELECT * FROM batallas WHERE nombre = '$_REQUEST[nombre]' ";
    $resultado = $con->query($consulta);

    while($datos=$resultado->fetch_array()){
        ?>
        <tr>
          <td><?php echo   $datos["nombre"];?> </td>
          <td><?php echo   $datos["nombrec"];?></td>
          <td><?php echo   $datos["resultado"];?></td>
           
          </tr>
          <?php 
    }

 ?>
</table>

<h1 align="center">Atacado</h1>
<table width="70%" border="1px" >

<tr align="center">
    <td>Mi ejercito</td>
    <td>Ejercito Atancate</td>
    <td>Resultado</td> 

    
</tr>
<?php 
    $consulta ="SELECT * FROM batallas WHERE nombrec = '$_REQUEST[nombre]' ";
    $resultado = $con->query($consulta);

    while($datos=$resultado->fetch_array()){
        ?>
        <tr>
          <td><?php echo   $datos["nombrec"];?></td>
          <td><?php echo   $datos["nombre"];?> </td>
          <td><?php echo   $datos["resultado"];?></td>
           
          </tr>
          <?php 
    }

 ?>
</table>
</body>
</html>