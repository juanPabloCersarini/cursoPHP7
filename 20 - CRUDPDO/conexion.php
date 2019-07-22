<?php
    class Conexion{
        public $cnx = null;

        function __constructor(){
            try {
                $this->cnx  = $this->getConnection();

            } catch (PDOException $e) {
                echo $e -> getMessage();
            }
        }

        private function getConnection(){
            $host ="localhost";
            $user = "root";
            $pass = "";
            $db = "basecursophp7";
            $charset ="utf8";
            $opt = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

            $pdo = new pdo("mysql:host={$host};
                            dname={$db};
                            charset={$charset};",
                            $user,
                            $pass,
                            $opt);
            
            $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
    }

?>