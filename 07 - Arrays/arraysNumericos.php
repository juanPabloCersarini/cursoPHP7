<?php
$numerico = array(2,"pedro",3.50,true);
if( $numerico[3]==false){
    echo "falso";
}else{
    echo $numerico[2]."<br>";
    echo $numerico[1]."<br>";
}

echo "<hr>";

echo $numerico[1][2]."<br>";
// cambiando un valor
$numerico[1]="hernan";
echo $numerico[1]."<br>";

$cadena = "lenguaje";

echo $cadena[4];
echo "<hr>";
$numerico2 = array(200,"jose pedro",35.50);

foreach ($numerico2 as $dato) {
    echo $dato."<hr>";
}

?>