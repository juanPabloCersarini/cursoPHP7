<?php
class Conexion{
         public $cnx = null;

        function __construct(){
            try {
                $this->cnx=$this->getConnection();
            } catch (PDOException $ex) {
                echo $ex -> getMessage();
            }
        }

        private function getConnection(){
            $host ="localhost";
            $user = "root";
            $pass = "";
            $db = "basecursophp7";
            $charset ="utf8";
            $dsn = "mysql:host=$host:3306;dbname=$db;charset=$charset";
            $opt = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

            $pdo = new pdo($dsn, $user, $pass, $opt);
            
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
    }
?>