<?php

/* a partir de PHP7 se usa para conectar a una base de datos
** mysqly o PDO
** mysqli(servidor, usuario, contraseña, base de datos)
*/

$servidor = "localhost";
$usuario = "root";
$contra = "";
$db = "basecursophp7";

$mysql = new mysqli($servidor, $usuario, $contra, $db);
print_r($mysql);
echo "<hr>";

$resultado = $mysql->query("select * from clientes");
 foreach ($resultado as $r) {
     echo "Nombre: ". $r['nCli'] ."<br>";
 }
?>