<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <div>

    <table border="1.0">
            <tr>
                <td>id</td>
                <td>temperatura</td>
                <td>estado</td>
                <td>consigna</td>
                <td>demanda</td>
            </tr>
            <?php
            $nid = $_POST['nid'];
            $ncontraseña = $_POST['ncontraseña'];
                
                $conexion = mysqli_connect("localhost:3307", "ciatema1", "123", "termostatos");
                $sql= "SELECT id, temperatura, estado, consigna, demanda FROM datos where id like '$nid' and contraseña like '$ncontraseña' ";
                $rta = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_row($rta)){  
            ?>
            <tr>
                <td><?php echo $mostrar['0']  ?></td>
                <td><?php echo $mostrar['1']  ?></td>
                <td><?php echo $mostrar['2']  ?></td>
                <td><?php echo $mostrar['3']  ?></td>
                <td><?php echo $mostrar['4']  ?></td>
            </tr>    
            <?php
                }
                ?>
        </table>
        <br>
        <a href="index.html">Pagina principal</a>
    </div>
</head>
<body>
    
</body>
</html>