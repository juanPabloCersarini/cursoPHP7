<?php
/* Por defecto PHP toma los parametros sin necesidad de declarar el tipo de un modo estircto
 * En la verión 7 ya permite definir el tipo de dato que se le pasa a una función
 * como parámetro
*/
declare(strict_types =1);
function sumar ( $a, $b){
    return $a+$b;
}

echo "la suma de 4 + 3 es igual a: ". sumar(4,3);
echo "<hr>";
echo "la suma de 4 + 10 es igual a: ". sumar(4, "10"); // en este caso automáticamente transforma la cadena en entero
echo "<hr>";

function restar(int $a,int $b){
    return $a-$b;
}

//echo restar(50.4,25); // declarando los tipos estrictos da error!!
echo restar(50, 25);
 
?>