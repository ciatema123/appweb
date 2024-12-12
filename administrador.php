<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Administrador</h1>
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
                <td>Opcion 1</td>
                <td>Opcion 2</td>
            </tr>
            <?php
                
                $conexion = mysqli_connect("localhost:3307", "ciatema1", "123", "termostatos");
                $sql= "SELECT id, temperatura, estado, consigna, demanda, contraseña FROM datos order by id asc";
                $rta = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_row($rta)){
            ?>
            <tr>
                <td><?php echo $mostrar['0']  ?></td>
                <td><?php echo $mostrar['1']  ?></td>
                <td><?php echo $mostrar['2']  ?></td>
                <td><?php echo $mostrar['3']  ?></td>
                <td><?php echo $mostrar['4']  ?></td>
                <td><?php echo $mostrar['5']  ?></td>
                <td>
                    <a href="editar.php?
                    id=<?php echo $mostrar['0']  ?>&
                    temperatura=<?php echo $mostrar['1']  ?>& 
                    estado=<?php echo $mostrar['2']  ?>&
                    consigna=<?php echo $mostrar['3']  ?>& 
                    demanda=<?php echo $mostrar['4']  ?>&
                    contraseña=<?php echo $mostrar['5']  ?> 
                    ">Editar</a>
                
                </td>
                <td><a href="sp_eliminar.php? id=<?php echo $mostrar['0']  ?>">Eliminar</a></td>
            </tr>    
            <?php
                }
                ?>
            
        </table>
    </div>
    <br>
    <a href="idnuevo.html">Nuevo</a>
    <br>
    <br>
    <a href="index.html">Inicio</a>


</body>
</html>