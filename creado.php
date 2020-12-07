<?php

require_once ("conexion/conexion.php");


?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
$cons = "SELECT monedas FROM unidades WHERE nombre_ejercito = '$_REQUEST[nombre]' GROUP BY nombre_ejercito";
$resultado = $con->query($cons);
while($datos=$resultado->fetch_array()){
  $monedas = $datos["monedas"];
  
}

$sql = "SELECT SUM(puntos) FROM unidades WHERE nombre_ejercito = '$_REQUEST[nombre]'";
$resultado = $con->query($sql);
while($datos=$resultado->fetch_array()){
    $fuerza = $datos[0];
    
    
  }

?>
    <h1 align="center">Ejercito <?php echo $_REQUEST['nombre']  ?> </h1>
    <h1>Monedas <?php echo $monedas ?> </h1>

    <h1>Puntos de Fuerza <?php echo $fuerza  ?> </h1>

    <table width="70%" border="1px" >

    <tr align="center">
        <td>Nombre</td>
        <td>Puntos</td>

        
    </tr>
    <?php 
        $consulta ="SELECT * FROM unidades WHERE nombre_ejercito = '$_REQUEST[nombre]' ORDER BY nombre_unidad";
        $resultado = $con->query($consulta);

        while($datos=$resultado->fetch_array()){
            ?>
            <tr>
              <td><?php echo   $datos["nombre_unidad"];?> </td>
              <td><?php echo   $datos["puntos"];?></td>
              <td><a href= "evolucionar.php?id=<?php echo $datos["id"];?>">Evolucionar</a>
              <td><a href= "entrenar.php?id=<?php echo $datos["id"];?>">entrenar</a>
               
              </tr>
              <?php 
        }

     ?>
    </table>


    <h1> BATALLA </h1>
    <form action="batalla.php" method="post">
       Ejercito <input type="text" name="nombre" value="<?php echo $_REQUEST['nombre']  ?> "> VS 


       <select name="batalla">

        <?php

          $consulta = "SELECT nombre_ejercito FROM unidades GROUP BY nombre_ejercito";
          $resultado = $con->query($consulta);
  
          while($datos=$resultado->fetch_array()){
            ?>  

            <option><?php echo ($datos["nombre_ejercito"]);?></option>
        <?php 
          }
        ?>
        </select>
        <input type="submit" value="BATALLAR">
    </form>

    <h2>Historial de Batallas</h2>
    <form action="historial.php" method="post">
       Ejercito <input type="text" name="nombre" value="<?php echo $_REQUEST['nombre']  ?> ">
        <input type="submit" value="Buscar">
    </form>



</body>
</html>
