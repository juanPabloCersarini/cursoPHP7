<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD con MySQLi - UPDATE</title>
</head>
<body>
     <h1>Modificar</h1>
    <form method = "post" action ="update.php">
    <?php
        include('conexion.php');
        $id_Cli = $_GET['idCli'];
        $clientes = $mysql->query("select * from clientes where idCli = {$id_Cli}");
        $datosCli = $clientes -> fetch_array();
    ?>
        <p>
             <label>ID:</label>
            <input type="text" name ="id" value = <?php echo $datosCli['idCli'];?>><br>
            <label>Nombre:</label>
            <input type="text" name ="nombre"maxlength ="30" value =" <?php echo $datosCli['nCli'];?>"><br>
            <label>Apellido:</label>
            <input type="text" name ="apellido"maxlength ="30" value = "<?php echo $datosCli['aCli'];?>"><br>
            <label>Dirección</label>
            <input type="text" name ="dire"maxlength ="30" value ="<?php echo $datosCli['dirCli'];?>"><br>
        </p>
        <input type ="submit" value="Guardar">
        <input type ="reset" value="Cancelar">

    </form>
       
</body>
</html>