<?php
    include("conexion.php");
    $pdo = new Conexion();
    $id = $_POST['id'];
    $nombre =$_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dire = $_POST['dire'];

    $pst =$pdo->cnx->prepare("update clientes set nCli=:nombre, aCli=:apellido, dirCli=:dire where idCli=:id");
    $pst->bindParam(":nombre",$nombre,PDO::PARAM_STR);
    $pst->bindParam(":apellido", $apellido, PDO::PARAM_STR);
    $pst->bindParam(":dire", $dire, PDO::PARAM_STR);
    $pst->bindParam(":id", $id, PDO::PARAM_INT);

    $pst->execute();

    header("location:index.php");
?>