<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD - PDO</title>
</head>
<body>
    <h1>Ingreso de datos</h1>
    <form method = "post" action ="createPDO.php">
        <p>
            <label>Nombre:</label>
            <input type="text" name ="nombre" required="true" maxlength ="30" minlength="3"><br>
            <label>Apellido:</label>
            <input type="text" name ="apellido" required="true" maxlength ="30" minlength="3"><br>
            <label>Dirección</label>
            <input type="text" name ="dire" required="true" maxlength ="30" minlength="3"><br>
        </p>
        <input type ="submit" value="Guardar">
        <input type ="reset" value="Cancelar">
    </form>    
    <br>
    <table border="1">
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Dirección</th>
        <th colspan="2">Opciones</th>
    <?php
    require("conexion.php");
    $pdo = new Conexion();
    $clientes = $pdo->cnx->query("select * from clientes");
    foreach ($clientes as $cli) {
        echo "<tr>
                <td>{$cli['idCli']}</td>
                <td>{$cli['nCli']}</td>
                <td>{$cli['aCli']}</td>
                <td>{$cli['dirCli']}</td>
                <td><a href='modificar.php?idCli={$cli['idCli']}'>Modificar</a></td>
                <td><a href='eliminar.php?idCli={$cli['idCli']}'>Eliminar</a></td>
             </tr>";
    }
    ?>
    </table>
</body>
</html>