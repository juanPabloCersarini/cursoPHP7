<?php
/* fopen()
 * fclose()
 * filesize()
 * fread()
 * fwrite()
 * 
 * r = Apertura para sólo lectura; coloca el puntero al principio del fichero.
 * r+ = Apertura para lectura y escritura; coloca el puntero al fichero al principio del fichero
 * w = Apertura para sólo escritura; coloca el puntero al fichero al principio del fichero y trunca el fichero a longitud cero. Si el fichero no existe se intenta crear.
 * w+ = Apertura para lectura y escritura; coloca el puntero al fichero al principio del fichero y trunca el fichero a longitud cero. Si el fichero no existe se intenta crear.
 * a = abre el archivo para solo escritura, coloca el puntero al final del archivo
 * a+ = abre el archivo para lectura y escritura, coloca el puntero al final del archivo
*/

$ruta2 = "prueba2.txt";
$archivo2=fopen($ruta2, "r+");

fwrite($archivo2, "mundo loco");
$archivo2=fopen($ruta2, "r+");
$tamanio2 = filesize($ruta2);
$contenido2 = fread($archivo2, $tamanio2);


fclose($archivo2);


echo "2 - el contenido de prueba2.txt es: " . $contenido2;
?>