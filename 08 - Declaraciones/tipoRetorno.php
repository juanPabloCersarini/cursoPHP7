<?php

/*En php7 se puede poner el tipo de variable que devolverá una función o método
* despues de los () con los parámetros de entrada se ponen : y el tipo que va a retornar
*/

declare(strict_types=1);
function multiplicar(float $a, float $b) : float{
    
    return $a*$b + 0.5;
}
echo multiplicar(1,3.5);
?>