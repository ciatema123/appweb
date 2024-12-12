<?php
$id = $_GET['id'];

    $conexion = mysqli_connect("localhost:3307", "ciatema1", "123", "termostatos");
    $sql= "DELETE  FROM datos WHERE id='$id'";
    $rta = mysqli_query($conexion, $sql);
    if (!$rta){
        echo "No se elimino el id";
    }
    else{
        header("location: index.php");
    }
?>