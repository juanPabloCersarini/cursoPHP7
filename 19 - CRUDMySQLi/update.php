<?php
    if ($_POST){
        include("conexion.php");
        $idCliente = $_POST['id'];
        $nombre =$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $dire=$_POST['dire'];

        $pst = $mysql->prepare("update clientes set nCli = ?, aCli = ?, dirCli = ? where idCli ={$idCliente}");
        $pst-> bind_param('sss',$nombre,$apellido,$dire);
        $pst->execute();
    }
    header("location:read.php");
?>