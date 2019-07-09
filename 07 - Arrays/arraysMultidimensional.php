<?php
//Es un array que contiene otros arrays ya sean numéricos, asociativos

$multidimensional = Array("DIAS" => Array("lunes"=> 1,"martes"=>2,"miercoles"=>3,"jueves"=>4,"viernes"=>5),
                         "MESES" => Array("Uno"=>"Enero", "Dos"=>"Febrero", "Tres"=>"Marzo"));

print_r($multidimensional);
echo "<hr>";
foreach ($multidimensional as $indice => $datosAux) {
    foreach ($datosAux as $datos) {
        echo $indice .": ".$datos."<br>";
        echo "<hr>";
    }
}
?>