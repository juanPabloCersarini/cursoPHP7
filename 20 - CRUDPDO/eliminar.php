<?php
    if ($_GET){
        include("conexion.php");
        $pdo = new Conexion();
        $id = $_GET['idCli'];
        $pst =$pdo->cnx->prepare("delete from clientes where idCli = :id");
        $pst->bindParam(":id",$id, PDO::PARAM_INT);
        $pst->execute();

        header("location:index.php");
    }
?>