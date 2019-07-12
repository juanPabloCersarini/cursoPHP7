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

$ruta4 = "prueba4.txt";
$archivo4=fopen($ruta4, "w+");
fwrite($archivo4, "---------------------");
$tamanio4 = filesize($ruta4);
$archivo4 =fopen($ruta4,"r");
$contenido4 = fread($archivo4, $tamanio4);

echo "4 - el contenido de prueba4.txt es: " . $contenido4;
fclose($archivo4);


?>