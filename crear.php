<?php
require_once ("conexion/conexion.php");




$consulta ="SELECT nombre_ejercito FROM unidades GROUP BY nombre_ejercito ";
$resultado = $con->query($consulta);

while($datos=$resultado->fetch_array()){
    if ($_REQUEST['nombre']== $datos["nombre_ejercito"] ){
    
        header("Status: 301 Moved Permanently");
        header("Location: http://localhost/ejercito/");
        exit;
    }
}
 if ($_REQUEST['civilizacion'] == "chino"){

    for ($i = 1; $i <= 2; $i++) {
        $sql2 ="INSERT INTO unidades (nombre_ejercito,civilizacion,nombre_unidad,puntos,monedas) VALUES ('$_REQUEST[nombre]','$_REQUEST[civilizacion]','piquero',5,1000)";
         mysqli_query($con, $sql2);
     }
     for ($i = 1; $i <= 25; $i++) {
        $sql2 ="INSERT INTO unidades (nombre_ejercito,civilizacion,nombre_unidad,puntos,monedas) VALUES ('$_REQUEST[nombre]','$_REQUEST[civilizacion]','arquero',10,1000)";
         mysqli_query($con, $sql2);
     }
     for ($i = 1; $i <= 2; $i++) {
        $sql2 ="INSERT INTO unidades (nombre_ejercito,civilizacion,nombre_unidad,puntos,monedas) VALUES ('$_REQUEST[nombre]','$_REQUEST[civilizacion]','caballero',20,1000)";
         mysqli_query($con, $sql2);
     }

}else if ($_REQUEST['civilizacion'] == "ingles") {
    
    for ($i = 1; $i <= 10; $i++) {

        $sql2 ="INSERT INTO unidades (nombre_ejercito,civilizacion,nombre_unidad,puntos,monedas) VALUES ('$_REQUEST[nombre]','$_REQUEST[civilizacion]','piquero',5,1000)";
         mysqli_query($con, $sql2);
     
        $sql3 ="INSERT INTO unidades (nombre_ejercito,civilizacion,nombre_unidad,puntos,monedas) VALUES ('$_REQUEST[nombre]','$_REQUEST[civilizacion]','arquero',10,1000)";
         mysqli_query($con, $sql3);
     
        $sql4 ="INSERT INTO unidades (nombre_ejercito,civilizacion,nombre_unidad,puntos,monedas) VALUES ('$_REQUEST[nombre]','$_REQUEST[civilizacion]','caballero',20,1000)";
         mysqli_query($con, $sql4);

     }

}else if ($_REQUEST['civilizacion'] == "bizantinos"){

    for ($i = 1; $i <= 5; $i++) {

        $sql2 ="INSERT INTO unidades (nombre_ejercito,civilizacion,nombre_unidad,puntos,monedas) VALUES ('$_REQUEST[nombre]','$_REQUEST[civilizacion]','piquero',5,1000)";
         mysqli_query($con, $sql2);

     }
     for ($i = 1; $i <= 8; $i++) {
        $sql2 ="INSERT INTO unidades (nombre_ejercito,civilizacion,nombre_unidad,puntos,monedas) VALUES ('$_REQUEST[nombre]','$_REQUEST[civilizacion]','arquero',10,1000)";
         mysqli_query($con, $sql2);
     }
     for ($i = 1; $i <= 15; $i++) {
        $sql2 ="INSERT INTO unidades (nombre_ejercito,civilizacion,nombre_unidad,puntos,monedas) VALUES ('$_REQUEST[nombre]','$_REQUEST[civilizacion]','caballero',20,1000)";
         mysqli_query($con, $sql2);

    }
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
       Ejercito <input type="text" name="nombre" value="<?php echo $_REQUEST['nombre']  ?> "> Fue Creado Presione
        <input type="submit" value="Continuar">
    </form>



</body>
</html>




