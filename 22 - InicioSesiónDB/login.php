<?php
    include("conexion.php");
    if ($_POST){
        $us = $_POST['nickname'];
        $clave = $_POST['contras'];

        $pdo = new Conexion();
        $resultado = $pdo -> cnx -> prepare("select * from usuarios where nickUsuario = :us and passUsuario = :clave");
        $resultado -> bindParam(":us",$us, PDO::PARAM_STR);
        $resultado -> bindParam(":clave", $clave, PDO::PARAM_STR);
        $resultado -> execute();
        $usuario = $resultado -> fetch();
        echo count($usuario);
        print_r( $usuario);

        if ($usuario['nickUsuario'] === $us){

            session_start();
            $_SESSION['nombre_usuario']= $usuario['nombreUsuario'];
            $_SESSION['id_usuario']= $usuario['idUsuario'];
            $_SESSION['nick_usuario']= $usuario['nickUsuario'];
            
            header("location:index.php");
        }else{
            header("location:error.php");

            //die("Usuario inexistente");
        }
    }
?>