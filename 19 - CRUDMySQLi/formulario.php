<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD - Con mySQLi - CREATE</title>
</head>
<body>
    <h1>Datos</h1>
    <form method = "post" action ="create.php">
        <p>
            <label>Nombre:</label>
            <input type="text" name ="nombre" required="true" maxlength ="30" minlength="3"><br>
            <label>Apellido:</label>
            <input type="text" name ="apellido" required="true" maxlength ="30" minlength="3"><br>
            <label>Dirección</label>
            <input type="text" name ="dire" required="true" maxlength ="100" minlength="3"><br>
        </p>
        <input type ="submit" value="Guardar">
        <input type ="reset" value="Cancelar">
    </form>    
    <br>
    <table border ="1">
        <tr>
            <th>ID</th>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Opción</th>
            <th>Opción</th>
        </tr>
    <?php
        include("conexion.php");
        $clientes = $mysql->query("select * from clientes");
        foreach ($clientes as $c) {
            echo "
                <tr>
                    <td>{$c['idCli']}</td>
                    <td>{$c['aCli']}</td>
                    <td>{$c['nCli']}</td>
                    <td>{$c['dirCli']}</td>
                    <td><a href='update.php?idCli={$c['idCli']}'>Modificar</a></td>
                    <td><a href='delete.php?idCli={$c['idCli']}'>Eliminarr</a></td>
                </tr>
                 ";
        }
    ?>
    </table>
</body>
</html>