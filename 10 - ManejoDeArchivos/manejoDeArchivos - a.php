<?php
/* fopen()
 * fclose()
 * filesize()
 * fread()
 * fwrite()
 * 
 * r = abre el archivo como solo lectura
 * r+ = abre el archivo para lectura y escritura
 * w = abre el archivo para solo escritura, coloca el puntero al inicio del archivo
 * w+ = abre el archivo para lectura y escritura, coloca el puntero al final del archivo
 * a = abre el archivo para solo escritura, coloca el puntero al final del archivo
 * a+ = abre el archivo para lectura y escritura, coloca el puntero al final del archivo
*/

$ruta5 = "prueba5.txt";
$archivo5=fopen($ruta5, "a");
fwrite($archivo5, " mundo");
$tamanio5 = filesize($ruta5);
$archivo5 =fopen($ruta5,"r");
$contenido5 = fread($archivo5, $tamanio5);

echo "5 - el contenido de prueba5.txt es: " . $contenido5;
fclose($archivo5);

echo "<hr>";
////////////////

$ruta5 = "prueba5.txt";
$archivo5=fopen($ruta5, "a+");
fwrite($archivo5, " hello word");
$tamanio5 = filesize($ruta5);
$archivo5 =fopen($ruta5,"r");
$contenido6 = fread($archivo5, $tamanio5);

echo "5 - el contenido de prueba5.txt es: " . $contenido6;
fclose($archivo5);

?>