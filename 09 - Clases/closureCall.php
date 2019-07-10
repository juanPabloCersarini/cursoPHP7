<?php

class Persona{

    private $edad = 20;

    public function saludar(string $nombre){
        echo "Hola " .$nombre;
    }

}

$datoEdad = function(){
    return $this -> edad;
};

echo $datoEdad->call(new Persona);
echo "<br>";

$datoNombre = function($nombre){
    return $this-> saludar($nombre);
};

echo $datoNombre->call(new Persona, "pepe");
?>