<?php

//Ejemplo break con for

for($i=0; $i<=10; $i++){
    if ($i == 5){
        break;
    }
    echo $i . "<br>";
}
echo "<hr>";
$array = array("a","b","c","d","e");

for ($i=0; $i<=count($array)-1; $i++){
    if ($array[$i]== "d"){
        break;
    }
    echo $array[$i] ."<br>";
}

echo "<hr>";
$array = array("a","b","c","d","e","f","g","h");

for ($i=0; $i<=count($array)-1; $i++) {
    if ($array[$i]== "g") {
        break;
    }
    if ($array[$i]=="c"){
        continue;
    }
    echo $array[$i] ."<br>";
}
// ejemplo con while

echo "<hr>";

$i =0;
while ($i<=10){
    if ($i == 5){
        break;
    }
    echo $i ."<br>";
    $i++;
}
?>