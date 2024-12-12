<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="buscar.php" method="POST">
            <input type="number" name="buscar" id="">
            <input type="submit" value="buscar">
        </form>
    </div>
    <br>
    <div>
        <table border="1.0">
            <tr>
                <td>id</td>
                <td>temperatura</td>
                <td>estado</td>
                <td>consigna</td>
                <td>demanda</td>
                <td>contraseña</td>
            </tr>
            <?php
                $buscar = $_POST['buscar'];
                $conexion = mysqli_connect("localhost:3307", "ciatema1", "123", "termostatos");
                $sql= "SELECT id, temperatura, estado, consigna, demanda, contraseña FROM datos where id like '$buscar' ";
                $rta = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_row($rta)){
            ?>
                <td><?php echo $mostrar['0']  ?></td>
                <td><?php echo $mostrar['1']  ?></td>
                <td><?php echo $mostrar['2']  ?></td>
                <td><?php echo $mostrar['3']  ?></td>
                <td><?php echo $mostrar['4']  ?></td>
                <td><?php echo $mostrar['5']  ?></td>
            
            <?php
                }
                ?>
            
            <br>
        </table>
        <br>
        <a href="index.html">Pagina principal</a>
        <br>
        <br>
        <a href="administrador.php">Administrador</a>
    </div>





</body>
</html>