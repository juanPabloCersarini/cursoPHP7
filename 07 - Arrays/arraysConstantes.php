<?php
//En php7 se pueden declarar arrays constantes

define("DIAS", array("lu","ma","mi","ju","vi","sa","do"));

print_r(DIAS);
echo "<hr>";
foreach (DIAS as $indice => $dato) {
    echo $indice+1 ." >> ". $dato . "<br>";
}
?>