<?php

/*
while (condición) {
    # code...
}
*/
// el código se va a ejecutar mientras la condición se cumpla
$i=0;
while ($i<=10){
    echo $i ."<br>";
    $i++;
}

$j=0;
$vector[0] = "juanpi";
$vector[1] = "gonza";
$vector[2] = "sebas";
$vector[3] = "marce";
$vector[4] = "naty";

while ($vector[$j] != "naty" ){
    echo $vector[$j]. "<br>";
    $j++;
}
// al encontrar "naty" el no se ejecuta el while ya que la condicion no se cumple 
$i=1;
$resultado=0;
while ($resultado <=20){
    $resultado = 2*$i;
    echo $resultado . " ";
    $i++;
}//cuando i vale 10 el resultado es 20 y entra mostrando el nuevo resultado 22 y la proxima ya no entraría
?>