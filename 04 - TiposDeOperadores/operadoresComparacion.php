<?php
$num1=4;
$num2=6;

$texto1="hola";
$texto2="chau";
$texto3="4";

if($num1==$num2){
    echo "son iguales". "<br>";
}

if($texto1!=$texto2){
    echo "son distintos" . "<br>";
}

if($num1 == $texto3){
    echo "son iguales (el doble = no distingue el tipado)"."<br>";
}

if($num1 ===$texto3){
    echo "son iguales";
}else{
    echo "son distintos (el === si distingue el tipado)"."<br>";
}

if($num1!=$num2){
     echo "son distintos" . "<br>";

}

if ($num1 < $num2){
    echo $num1 ." es menor que " . $num2 . "<br>";
}

if ($num2 > $num1){
    echo $num2 . " es mayor que " . $num1 . "<br>";
}

if ($num1 <= $num2) {
    echo $num1 ." es menor o igual que " . $num2 . "<br>";
}

if ($num2 >= $num1) {
    echo $num2 . " es mayor o igual que " . $num1;
}

?>