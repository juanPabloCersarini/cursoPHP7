<?php
// $array = array($nombreDelIndice => "valorQueContiene",$nombreDelIndice => "valorQueContiene" );
/* La mayoría de consultas que se hacen a una base de datos se devuelven como
* arrays asociativos
*/
$edad=45; 
$ape="Apellido";
$asociativo = Array("Nombre"=>"Juan Pablo", $ape =>"Cesarini", "Edad"=> $edad);

print_r($asociativo);
echo "<br>";
print_r($asociativo["Nombre"])."<br>";
echo "<br>";
echo "<hr>";
foreach ($asociativo as $dato) {
    echo $dato . "<br>";
}

echo "<hr>";
foreach ($asociativo as $indice => $dato) {
    echo $indice . ": " .$dato . "<br>";
}
echo "<hr>";
?>