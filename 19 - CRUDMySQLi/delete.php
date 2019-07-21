<?php
    if ($_GET){
        include("conexion.php");
        $id_Cli = $_GET['idCli'];
        $pst = $mysql->prepare("delete from clientes where idCli = ?");
        $pst -> bind_param("i",$id_Cli);
        $pst ->execute();
    }
    header("location:read.php");

?>