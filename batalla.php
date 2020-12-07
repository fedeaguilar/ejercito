<?php

require_once ("conexion/conexion.php");

$sql = "SELECT SUM(puntos) FROM unidades WHERE nombre_ejercito = '$_REQUEST[nombre]'";
$resultado = $con->query($sql);
while($datos=$resultado->fetch_array()){
    $fuerza = $datos[0];
    
    
  }
    
  $sql = "SELECT SUM(puntos) FROM unidades WHERE nombre_ejercito = '$_REQUEST[batalla]'";
$resultado = $con->query($sql);
while($datos=$resultado->fetch_array()){
    $fuerzac = $datos[0];
    
   
    
}

$sql="SELECT * FROM unidades WHERE nombre_ejercito = '$_REQUEST[nombre]' ";
$resultado = $con->query($sql);
while($datos=$resultado->fetch_array()){
  $monedas2 = $datos["monedas"];
 }

 $sql="SELECT * FROM unidades WHERE nombre_ejercito = '$_REQUEST[batalla]' ";
$resultado = $con->query($sql);
while($datos=$resultado->fetch_array()){
  $monedas = $datos["monedas"];
 }

 $sql="SELECT min(puntos),id FROM unidades WHERE nombre_ejercito = '$_REQUEST[nombre]' ";
$resultado = $con->query($sql);
while($datos=$resultado->fetch_array()){
  $pierde = $datos["id"];
  
 }

 $sql="SELECT min(puntos),id FROM unidades WHERE nombre_ejercito = '$_REQUEST[batalla]' ";
 $resultado = $con->query($sql);
 while($datos=$resultado->fetch_array()){
   $pierde2 = $datos["id"];
   
  }

 

  

if($fuerza > $fuerzac){
    $monedase = $monedas2 + 100;
    $sql="UPDATE unidades SET monedas = '$monedase' WHERE nombre_ejercito = '$_REQUEST[nombre]' ";
    mysqli_query($con, $sql);
    echo "Has Ganado";

    $datos = "SELECT id FROM unidades WHERE nombre_ejercito = '$_REQUEST[batalla]' ORDER BY puntos DESC LIMIT 2 ";
    $resultado = mysqli_query($con,$datos);
    while($mostrar = mysqli_fetch_array($resultado)){

       
      $sql = "DELETE FROM unidades WHERE id = '$mostrar[id]'";
      mysqli_query($con, $sql);
  
    }

    $sql2="INSERT INTO batallas (nombre, nombrec, resultado) VALUES ('$_REQUEST[nombre]','$_REQUEST[batalla]','Ganada') ";
    mysqli_query($con, $sql2);
    
  

} else if ($fuerza < $fuerzac){
    

    $monedase = $monedas + 100;
    $sql="UPDATE unidades SET monedas = '$monedase' WHERE nombre_ejercito = '$_REQUEST[batalla]' ";
    mysqli_query($con, $sql);

    $datos = "SELECT id FROM unidades WHERE nombre_ejercito = '$_REQUEST[nombre]' ORDER BY puntos DESC LIMIT 2 ";
    $resultado = mysqli_query($con,$datos);
    while($mostrar = mysqli_fetch_array($resultado)){

       
      $sql3 = "DELETE FROM unidades WHERE id = '$mostrar[id]'";
      mysqli_query($con, $sql3);
  
    }

    $sql2="INSERT INTO batallas (nombre, nombrec, resultado) VALUES ('$_REQUEST[nombre]','$_REQUEST[batalla]','Perdida') ";
    mysqli_query($con, $sql2);

    echo "Has perdio";

}else if ($fuerza == $fuerzac){

    $sql="DELETE FROM unidades WHERE id = $pierde ";
    mysqli_query($con, $sql);

    $sql="DELETE FROM unidades WHERE id = $pierde2 ";
    mysqli_query($con, $sql);

    $sql2="INSERT INTO batallas (nombre, nombrec, resultado) VALUES ('$_REQUEST[nombre]','$_REQUEST[batalla]','Empatada') ";
    mysqli_query($con, $sql2);

    echo "Has EMpatado";

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
       <input type="text" name="nombre" value="<?php echo $_REQUEST['nombre'] ?> "> presione continuar
        <input type="submit" value="Continuar">
    </form>



</body>
</html>