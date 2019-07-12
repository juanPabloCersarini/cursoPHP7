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

$ruta3 = "prueba3.txt";
$archivo3=fopen($ruta3, "w");
fwrite($archivo3, "se borro todo el contenido");
$tamanio3 = filesize($ruta3);
$archivo3 =fopen($ruta3,"r");
$contenido3 = fread($archivo3, $tamanio3);

echo "3 - el contenido de prueba3.txt es: " . $contenido3;
fclose($archivo3);


?>