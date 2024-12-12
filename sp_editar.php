<?php
$id = $_POST['id'];
$temperatura = $_POST['temperatura'];
$estado = $_POST['estado'];
$consigna = $_POST['consigna'];
$demanda = $_POST['demanda'];
$contraseña = $_POST['contraseña'];


    $conexion = mysqli_connect("localhost:3307", "ciatema1", "123", "termostatos");
    $sql= "UPDATE datos SET temperatura='$temperatura', estado='$estado', consigna='$consigna', demanda='$demanda', contraseña='$contraseña' WHERE id='$id'";
    $rta = mysqli_query($conexion, $sql);
    if (!$rta){
        echo "No se actualizaron los datos";
    }
    else{
        header("location: index.php");
    }
?>