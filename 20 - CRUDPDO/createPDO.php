<?php
    include("conexion.php");
    $pdo = new Conexion();
    $nombre=$_POST['nombre'];
    $apellido =$_POST['apellido'];
    $dire=$_POST['dire'];
    $pst = $pdo->cnx->prepare("insert into clientes values (null, :nCli, :aCli, :dirCli)");
    $pst->bindParam(":nCli", $nombre, PDO::PARAM_STR);
    $pst->bindParam(":aCli", $apellido, PDO::PARAM_STR);
    $pst->bindParam(":dirCli", $dire, PDO::PARAM_STR);
    $pst->execute();
    header("location:index.php");

?>