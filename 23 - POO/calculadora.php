<?php
    class Calculadora{

        public static $pi =3.14;
        public static function suma (int $a, int $b):int{
            return $a + $b;
        }
    }

    // Al ser estático el método puede ser utilizadoaccedido instanciando o no la clase
    // NO se tiene acceso a los atributos estáticos instanciando la clase

    $calcu = new Calculadora();

    echo $calcu->suma(5,3)."<br>";

    echo Calculadora::suma(5,6)."<br>";
    echo Calculadora::$pi;
?>