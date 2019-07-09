<?php
/* \n -> nueva línea --> no funciona con localhost
 * \r -> retorno de carro --> no funciona con localhost
 * \t -> tabulación --> no funciona con localhost
 * \$ -> mostrar signo $
 * \" -> mostrar comillas dobles 
*/

//mostrar "

$cadena ="\"estoy mostrando el texto entre comillas dobles\"";
echo $cadena;
echo "<hr>";

// mostrar $
$importe = 50200;
echo "El importe es: \$ " .$importe;
echo "<hr><hr>";

//strlen() sirve para ver la cantidad de elementos de una cadena

$frase ="hola como estas";

for ($i=0; $i<=strlen($frase)-1; $i++){
    echo $frase[$i]."<br>";
}

//strpos()

echo strpos($frase,"o")."<hr><hr>"; // mustra la primer posición donde aparece
echo substr($frase,5,8);// sirve para extraer elementos de la cadena dándole la pos y la cantidad que elementos a extraer
?>
