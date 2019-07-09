<?php
/* Sirve para comparar dos variables,
 * si el primero es menor devuelve -1
 * si son iguales devuelve 0
 * si el primero es mayor devuelve 1
 * el simbolo es <=>*/

 $num1 = 50;
 $num2 = 60;
 $num3 = 50;

 echo "Comparando ". $num1 . " y ". $num2. " devuelve: ";
 echo $num1<=>$num2;
 echo "<br>";

 echo "Comparndo ". $num2 ." y ". $num3. " devuelve: "; 
 echo $num2<=>$num3;
 echo "<br>";

 echo "Comparndo ". $num1 ." y ". $num3. " devuelve: ";
 echo $num1<=>$num3;
 echo "<br>";

 $cadena1 = "hola mundo";
 echo strlen($cadena1)."<br>";
 $cadena2 = "hola";
 echo strlen($cadena2). "<br>";
 $cadena3 ="hola como va todo";

 if (($cadena1<=>$cadena2)==0){
     echo $cadena1 ." y " .$cadena2 . " tienen las mismas letras y espacios";
 }elseif (($cadena3<=>$cadena2)==1){
     echo $cadena3." tiene mas letras";
 }else {
     echo $cadena2. " tiene menos letras";
 }

 echo "<hr>";

 $cadena1 = "hola";
 echo strlen($cadena1)."<br>";
 $cadena2 = "hola";
 echo strlen($cadena2). "<br>";
 $cadena3 ="hola como va todo";

 if (($cadena1<=>$cadena2)==0) {
    echo $cadena1 ." y " .$cadena2 . " tienen las mismas letras y espacios";
} elseif (($cadena3<=>$cadena2)==1) {
    echo $cadena3." tiene mas letras";
} else {
    echo $cadena2. " tiene menos letras";
}

?>