<?php
/*OPERADORES ARITMETICOS
* + - * / % ++ --
* OPERADORES DE COMPARACION
* === == < > != <= >=
* OPERADORES LOGICOS
* and or && || !
* OPERADORES DE ASIGNACION
* = += -= *= /= %=
* OPERADORES CONDICIONALES
* condición ? valor_si_true 
* condición ? valor_si_false
*/
$num1=30;
$num2=4;
$suma = 10 + 5;
$suma2=$num1+$num2;
echo $suma . "<br>".$suma2 . "<br>";
$resta = 10 - 5;
$resta2 = $num1-$num2;
echo $resta . "<br>" .$resta2 . "<br>";
$multiplicacion = 10 * 5;
$multiplicacion2 = $num1*$num2;
echo $multiplicacion . "<br>" . $multiplicacion2 ."<br>";
$division = 10 / 5;
$division2 = $num1 / $num2;
echo $division . "<br>" . $division2 ."<br>";
$modulo = 10 % 5;
$modulo2 = $num1%$num2;
echo $modulo . "<br>" . $modulo2 ."<br>";
$incremento = 1;
$incremento++;
echo $incremento . "<br>";
$decremento = 2;
$decremento--;
echo $decremento;
?>