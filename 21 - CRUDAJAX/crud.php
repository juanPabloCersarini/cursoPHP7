<?php
    include("conexion.php");
    class Crud extends Conexion{

        function __construct(){
            parent:: __construct();
        }

        public function consultarClientes(){
            $clientes = $this -> cnx -> query("select * from clientes");
            return $clientes -> fetchAll();
        }

        public function consultarUnCliente($idCli){
            $pst = $this -> cnx -> prepare("select * from clientes where idCli = :idCli");
            $pst -> bindParam(":idCli", $idCli, PDO::PARAM_INT);
            $pst -> execute();
            return $pst -> fetch();
        }


        public function guardarCliente($nombre, $apellido, $dire){
            $pst = $this -> cnx -> prepare("insert into clientes values (null, :nombre, :apellido, :dire)");
            $pst -> bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $pst -> bindParam(":apellido", $apellido, PDO::PARAM_STR);
            $pst -> bindParam(":dire", $dire, PDO::PARAM_STR);
            return $pst->execute();
        }

        public function modificarCliente($nombre, $apellido, $dire, $id){
            $pst = $this -> cnx ->prepare("update clientes set nCli = :nombre, aCli = :apellido, dirCli = :dire where idCli = :id");
            $pst -> bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $pst -> bindParam(":apellido", $apellido, PDO::PARAM_STR);
            $pst -> bindParam(":dire", $dire, PDO::PARAM_STR);
            $pst -> bindParam(":id", $id, PDO::PARAM_INT);
            return $pst -> execute();
        }

        public function borrarCliente($id){
            $pst = $this -> cnx -> prepare("delete from clientes where idCli = :id");
            $pst -> bindParam(":id", $id, PDO::PARAM_INT);
            return $pst -> execute();
        }
    }
?>