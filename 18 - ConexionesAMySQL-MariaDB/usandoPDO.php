<?php
/*
PDO está orientado a objetos
La ventaja de usar PDO
Permite conectar con Postgres MariaDB MySQL no es necesario cambiar las consultas migrando de 
un motor de base de datos a otro
*/

$host="localhost";
$user="root";
$pass="";
$db ="basecursophp7";
$charset ="utf8";

$dsn = "mysql:host=$host:3306;dbname=$db;charset=$charset"; //url de conexión!!
//$dsn = "mysql:host=localhost:3306;dbname=basecursophp7;charset=utf8";

$opt = [PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]; // esto es opcional y sirve para que devuelva el resultado en un array asociativo
$pdo = new PDO($dsn,$user,$pass,$opt);
print_r($pdo);
echo "<hr>";
$pst = $pdo->prepare("select * from clientes where idCli = ?");
$idCliente =3;
$pst->bindParam(1, $idCliente);
$pst->execute();
foreach ($pst as $r) {
    echo "Apellido: ". $r['aCli'];
}

