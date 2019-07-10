<?php
//se encadenan los GET y muestra el primer valor que no sea NULL

$variable = $_GET['nombre'] ?? "no se recibio el dato";
echo $variable;
echo "<hr>";

$_GET['nombre'] = "pedro";

$variable = $_GET['nombre'] ?? "no se recibio el dato";
echo $variable;
echo "<hr>";
$_GET['nombre']= null;
//$_GET['apellido']="perez";

$variable = $_GET['apellido'] ??$_GET['nombre']?? " no se encontro apellido ni nombre";
 echo $variable;
?>