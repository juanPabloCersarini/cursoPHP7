<?php
    /*Variables según el ámbito
    * Locales
    * Globales
    * Estaticas
    * Parámetro de funciones
    */

    $variableGlobal = "Me pueden usar los métodos o cualquier otro código que se
                      escriba después de la definición";

    function mostrar(){
        global $variableGlobal;
        echo "Variable global: " .$variableGlobal . "<br>";
        $variableLocal = " Me pueden usar solo dentro de una función / método, si me llaman por afuera doy error
                         -->Notice: Undefined variable: variableLocal <--";
        echo "Variable local: " . $variableLocal;
    }
    function incrementar(){
        static $incremento = 1; 
        $incremento++;
        echo"<br>" . $incremento;
    }
    mostrar();
    incrementar();
    incrementar();
    incrementar();

    mostrarConstante();
    /* Una variable estática mantiene el valor que va tomando dentro de la función/método
    * en donde fue declarada, en el ejemplo en la primer llamada a la función tiene un valor de 1 más 1 del
    * incremento. en la segunda llamada guarda el último valor (2) y el resultado a mostrqr es de 3
    */

    /* Se entiende como variable constante a aquela que NUNCA debe cambiar su valor.
    * con la función: define("nombreVariable",valor) se declara y con constant("nombreVariable") se utiliza.
    * ejemplo en la función mostrarConstante().
    * Otra forma de usarla es sin el $ y escritas en mayúsculas.
    * En PHP 7 también los arrays se pueden definir como constantes
    */ 
    function mostrarConstante(){
        define("VALORPI", 3.14); 
        echo "<br>" . constant("VALORPI");
        echo "<br>".VALORPI;
        define("MINOMBRE", "juan pablo");
        echo "<br>" . constant("MINOMBRE");
        echo "<br>" . MINOMBRE;
    }

    // PARAMETROS DE FUNCIÓN
    function saludar($nombre){
        echo "<br>"."Hola como estas, ".$nombre;
    }

    saludar("PEPE");
    /* Cuando utilizamos las variables como parámetros estamos haciendo que 
    * la función opere con los valores que se le ponen entre los paréntesis,
    * pueden ser valores o varibles propiamente dichas.
    */

?>