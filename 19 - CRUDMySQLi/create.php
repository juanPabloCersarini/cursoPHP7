<?php
    if ($_POST){
        include("conexion.php");
        $nombre =$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $dire=$_POST['dire'];

        $pst = $mysql-> prepare("insert into clientes values (null,?,?,?)");
        $pst -> bind_param('sss',$nombre,$apellido,$dire);
        $resultado = $pst->execute();


    }
?>