<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$id = $_GET['id'];
$temperatura = $_GET['temperatura'];
$estado = $_GET['estado'];
$consigna = $_GET['consigna'];
$demanda = $_GET['demanda'];
$contraseña = $_GET['contraseña'];
?>
    <div>
        <form action="sp_editar.php" method="POST">
            <table border="1.1">
                <tr>
                    <td>Datos del ID nº:</td>
                    <td><?=$id?><input type="number" name="id" id="" style="visibility: hidden;" value="<?=$id?>"></td>
                </tr>
                <tr>
                    <td>Temperatura:</td>
                    <td><input type="number" name="temperatura" id="" value="<?=$temperatura?>"></td>
                </tr>
                <tr>
                    <td>Estado:</td>
                    <td><input type="number" name="estado" id="" value="<?=$estado?>"></td>
                </tr>
                <tr>
                    <td>Consigna:</td>
                    <td><input type="number" name="consigna" id="" value="<?=$consigna?>"></td>
                </tr>
                <tr>
                    <td>Demanda:</td>
                    <td><input type="number" name="demanda" id="" value="<?=$demanda?>"></td>
                </tr>
                <tr>
                    <td>Contraseña:</td>
                    <td><input type="number" name="contraseña" id="" value="<?=$contraseña?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Actualizar"></td>
                    <td><a href="administrador.php">Cancelar</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
