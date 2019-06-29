<?php
/*if (condición) {
 *  Si es verdadera ejecuta esta parte
 *}else{
 *  Si es falsa ejecuta esta parte    
 *}
*/
$edad= 15;
if ($edad >18 && $edad < 50){
    echo "sos joven"."<br>";
}else{
    echo "sos un bebe o un anciano"."<br>";
}
//Ejemplo if anidado
$edad= 25;
$eCivil="soltero";
if ($edad >18 && $edad < 50) {
    if ($eCivil=="soltero"){
        echo "Sos joven y soltero"."<br>";
    }else{
        echo "sos joven y casado/viudo/separado"."<br>";
    }
} else {
    echo "sos un bebe o un anciano"."<br>";
}
//Ejemplo if elseif
//opcion 1
$precio = 100;
$marca = "fiat";
$marca2 = "renault";
$color = "verde";
if ($precio ==100){
    if ($marca=="fiat"){
        echo "La marca es ".$marca. " y el precio es " .$precio. "<br>";
    }elseif($color == "verde"){
        echo "El auto es " .$marca2. " y de color " .$verde. "<br>";
    }
}else{
    echo "mejor usar bicicleta";
}

//opcion 2
$precio = 100;
$marca = "peugeot";
$marca2 = "renault";
$color = "verde";
if ($precio ==100) {
    if ($marca=="fiat") {
        echo "La marca es ".$marca. " y el precio es " .$precio. "<br>";
    } elseif ($color == "verde") {
        echo "El auto es " .$marca2. " y de color " .$color ."<br>";
    }
} else {
    echo "mejor usar bicicleta";
}

//opcion 3
$precio = 1000;
$marca = "peugeot";
$marca2 = "renault";
$color = "verde";
if ($precio ==100) {
    if ($marca=="fiat") {
        echo "La marca es ".$marca. " y el precio es " .$precio. "<br>";
    } elseif ($color == "verde") {
        echo "El auto es " .$marca2. " y de color " .$color. "<br>";
    }
} else {
    echo "mejor usar bicicleta";
}

//usando el operador de condicion
echo "<hr>";
$resultado = 10%2==0 ? "Es par"."<br>":"es impar"."<br>";
echo $resultado;
?> 