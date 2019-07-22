<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD PDO</title>
</head>
<body>
    <h1>Modificación de Datos</h1>
    <form action="updatePDO.php" method ="POST">
        <?php
            include("conexion.php");
            $idCli = $_GET['idCli'];
            $pdo =new Conexion();
            $consulta=$pdo->cnx->prepare("select * from clientes where idCli = :idCli");
            $consulta->bindParam(":idCli",$idCli,PDO::PARAM_INT );
            $consulta->execute();
            $datos=$consulta->fetch();
        ?>
        <p>
            <label>ID</label>
            <input type="text" name="id" value ="<?php echo $datos['idCli'];?>" readonly="true">
            <br>
            <label>Nombre</label>
            <input type ="text" name="nombre" maxlength="64" value="<?php echo $datos['nCli'];?>" required="true">
            <br>
            <label>Apellido</label>
            <input type ="text" name="apellido" maxlength="64" value="<?php echo $datos['aCli'];?>" required="true">
            <br>
            <label>Dirección</label>
            <input type ="text" name="dire" maxlength="64" value="<?php echo $datos['dirCli'];?>" required="true">
        </p>
        <input type ="submit" value="Guardar">
        <input type ="reset" value="Cancelar">
    </form>    
</body>
</html>