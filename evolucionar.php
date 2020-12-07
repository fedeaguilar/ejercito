<?php

require_once ("conexion/conexion.php");

$id = $_GET['id'];

$sql="SELECT * FROM unidades WHERE id = '$id'";
$resultado = $con->query($sql);
while($datos=$resultado->fetch_array()){
  $unidad = $datos["nombre_unidad"];
  $puntos = $datos["puntos"];
  $monedas = $datos["monedas"];
  $nombre = $datos["nombre_ejercito"];
 }

 if ($unidad == "arquero"){
     $puntose = $puntos + 10;
     $monedase= $monedas - 40;

    $sql="UPDATE unidades SET nombre_unidad = 'caballero', puntos='$puntose' WHERE id = '$id' ";
    mysqli_query($con, $sql);


    $sql2= "UPDATE unidades SET monedas = '$monedase' WHERE nombre_ejercito = '$nombre' ";
    mysqli_query($con, $sql2);
  
    echo "evolucion exitosa";

 }else if ($unidad == "caballero"){
    
    echo "Los Caballeros no pueden evolucionar";



 }else if ($unidad == "piquero"){
    $puntose = $puntos + 5;
    $monedase= $monedas - 30;

   $sql="UPDATE unidades SET nombre_unidad = 'arquero', puntos='$puntose' WHERE id = '$id' ";
   mysqli_query($con, $sql);


   $sql2= "UPDATE unidades SET monedas = '$monedase' WHERE nombre_ejercito = '$nombre' ";
   mysqli_query($con, $sql2);

   echo "evolucion exitosa";

 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="creado.php" method="post">
       Ejercito <input type="text" name="nombre" value="<?php echo $nombre  ?> "> presione continuar
        <input type="submit" value="Continuar">
    </form>



</body>
</html>