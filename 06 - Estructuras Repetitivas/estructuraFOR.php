<?php
/* for (inicio; condición; incremento){
 *   código
 *}
 * se utiliza para hacer cosas iguales una cantidad de veces ciertas
 */

for ($i=0; $i <=10 ; $i++) { 
    echo "La i es = a : " . $i ."<br>";
    echo "<hr>";
}
// ejemplo para mostrar la tabla del 5
$resultado =0;
for ($i=0; $i <=10 ; $i++) { 
    $resultado = 5 * $i;
    echo "5 x " .$i. " = ". $resultado. "<br>";
    echo "<hr>";
}

// ejemplo para mostrar todas las tablas usando for anidados
$resultado =0;
for ($i=1; $i <=10 ; $i++) {
    echo "LA TABLA DEL ". $i;
    echo "<hr>";
    for ($j=0; $j <=10 ; $j++) { 
        $resultado= $i*$j;
        echo $i."*".$j. "=". $resultado ."<br>";
    }
    $resultado = 5 * $i;
    echo "<hr>";
}

?>