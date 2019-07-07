<?php
// La estructura foreach sirve para recorrer arreglos o colección de objetos

$arrayDeNumeros = array(1,2,3,4,5);
 foreach ($arrayDeNumeros as $numero) {
     echo $numero ."<br>";
 }

 echo "<hr>";

 $arrayAsoc = array("Nombre" => "juan", "Apellido" => "perez", "Edad" => "34");

 foreach ($arrayAsoc as $dato) {
     echo $dato ."<br>";
 }

 echo "<hr>";

 foreach ($arrayAsoc as $key => $dato) {
     echo "{$key}:   {$dato}<br>";
 }

 echo "<hr>";

 $arrayMultidim = Array(Array(1,2,3,4,5), Array("Naty", "Seba", "Gonza", "Marce", "Juanpy"));

 foreach ($arrayMultidim as $grupo) {
     foreach ($grupo as $integrante) {
         echo $integrante ."<br>";
     }
 }
?>