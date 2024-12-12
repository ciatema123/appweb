<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php

    //base de datos
    $servername = "localhost:3307";
    $database = "termostatos";
    $username = "ciatema1";
    $password = "123";

    //recuperacion de variables del html
    $id = $_POST['id'];
    $temperatura = $_POST['temperatura'];
    $estado = $_POST['estado'];
    $consigna = $_POST['consigna'];
    $demanda = $_POST['demanda'];
    $contraseña = $_POST['contraseña'];

    //conexion a la database
    $conexion = mysqli_connect($servername,$username,$password,$database);
    //ingresando valores a la database
    $sql = "INSERT INTO datos (id, temperatura, estado, consigna, demanda, contraseña) values ('$id','$temperatura', '$estado', '$consigna', '$demanda', '$contraseña')";

    if(mysqli_query($conexion, $sql)){
        echo "Registro completo";
    }
    ?>
    <br>
    <br>
    <button><a href = "index.html">Regresar al Inicio</a></button>



</body>
</html>