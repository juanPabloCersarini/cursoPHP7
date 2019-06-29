<?php

/* Se utilizan para evaluar más de una condición
* IMPORTANTE TENER PRESENTE LAS TABLAS DE VERDAD
*/

$num1 = 4;
$num2 = 5;
$num3 = 2;

if($num1 < $num2 and $num2 > $num3){
    /* p = ($num1 < $num2) q = ($num2 > $num3)
    * en este caso ambas son VERDADERAS = "TRUE" ingresa y ejecuta el código
    * si el resultado fuese FALSE sigue de largo con el código o bien ejecuta
    * lo que esté en el else
    */
    echo "1 - Se cumple la condición del and" . "<br>";
}
if ($num1 < $num2 && $num2 > $num3) { // siempre es mejor usar && ya que tiene mayor peso que el and
    /* p = ($num1 < $num2) q = ($num2 > $num3)
    * en este caso ambas son VERDADERAS = "TRUE" ingresa y ejecuta el código
    * si el resultado fuese FALSE sigue de largo con el código o bien ejecuta
    * lo que esté en el else
    */
    echo "2 - Se cumple la condición del &&" . "<br>";
}
if ($num2 < $num1 or $num2 > $num3) { // siempre es mejor usar && ya que tiene mayor peso que el and
    /* p = ($num1 < $num2) q = ($num2 > $num3)
    * en este caso p es FALSE y q TRUE el resultado es "TRUE" ingresa y ejecuta el código
    * si el resultado fuese FALSE sigue de largo con el código o bien ejecuta
    * lo que esté en el else
    */
    echo "3 - Se cumple la condición del or". "<br>";
}

if ($num2 < $num1 || $num2 > $num3) { // siempre es mejor usar && ya que tiene mayor peso que el and
    /* p = ($num1 < $num2) q = ($num2 > $num3)
    * en este caso p es FALSE y q TRUE el resultado es "TRUE" ingresa y ejecuta el código
    * si el resultado fuese FALSE sigue de largo con el código o bien ejecuta
    * lo que esté en el else
    */
    echo "4 - Se cumple la condición del ||". "<br>";
}


if ($num2 < $num1 || $num2 < $num3) { // siempre es mejor usar && ya que tiene mayor peso que el and
    /* p = ($num1 < $num2) q = ($num2 > $num3)
    * en este caso p es FALSE y q FALSE el resultado es "FALSE"  no ingresa y ejecuta el código
    * en este caso como el resultado fuese FALSE  ejecuta
    * lo que esté en el else
    */
    echo "5 - Se cumple la condición del ||". "<br>";
}else{
    echo " 5 - No se cumplió la condición del ||"."<br>";
}

if ($num2 != $num1 || $num2 < $num3) { // siempre es mejor usar && ya que tiene mayor peso que el and
    /* p = ($num1 < $num2) q = ($num2 > $num3)
    * en este caso p es FALSE y q FALSE el resultado es "FALSE"  no ingresa y ejecuta el código
    * en este caso como el resultado fuese FALSE  ejecuta
    * lo que esté en el else
    */
    echo "6 - Se cumple la condición del ||". "<br>";
}else{
    echo "6 - No se cumplió la condición del ||"."<br>";
}
// Se puede negar el contenido de una variable
if (!($num2 != $num1 ) || $num2 == $num3) { 
    /*  Es verdadero que num2 es distinto que num1 pero al negar devuelve FALSE
    * como ambas condiciones son FALSE el resultado final es TRUE, ejecuta el codigo
    */
    echo "7 - Se cumple la condición del ||". "<br>";
} else {
    echo "7 - No se cumplió la condición del ||"."<br>";
}

// Otro operador es el xor (o exclusivo es verdadero cuando una de las condiciones es TRUE)

if ($num1 < $num2 xor $num2 == $num3) {
    /* p = ($num1 < $num2) q = ($num2 > $num3)
    * en este caso ambas son VERDADERAS = "TRUE" ingresa y ejecuta el código
    * si el resultado fuese FALSE sigue de largo con el código o bien ejecuta
    * lo que esté en el else
    */
    echo "8 - Se cumple la condición del xor" . "<br>";
}

?>