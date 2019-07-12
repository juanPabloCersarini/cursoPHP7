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
$ruta ="prueba.txt";
$archivo=fopen($ruta, "r");
$tamanio = filesize($ruta);
$contenido = fread($archivo, $tamanio);

echo "1 - el contenido de prueba.txt es: " . $contenido;
fclose($archivo);


?>