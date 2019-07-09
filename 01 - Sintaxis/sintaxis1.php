<?php
//COMENTARIOS:

// LA DOBLE BARRA (//) SE USA PARA COMENTARIOS DE UNA SOLA LINEA.
// La barra y asterisco se usan para comentarios multilineas
/* Para abrir --> /*
* para cerrar --> */

/*En PHP las variables no son tipadas (int, char, string, boolean),
* en la versión 7 de PHP se puede forzar el tipado.
* Las variables se escriben con el signo $ por delande del nombre, ej. $nombreVariable
*/

$numero = 0; // se le asigna el valor a la variable.
$texto = "Este es un texto"; // para identificar que es una cadena de texto se enciera entre comillas dobles
$_num = 1;
$_text = "Hola Mundo" ;// también se puede escribir los nombres de las variables con el guión bajo

$textoEntreComillas = '"Entre comillas se muestra este texto"' ;
// Usando las comillas simples podemos usaar las dobles para poder mostrarlas

$caracterDeEscape = "\"Estoy entre comillas dobles usando caracter de escape\"";
// esta es la manera que hay para usar comillas dobles para contener el texto y para mostrar

echo "Mostrando el contenido de las variables:";
echo $numero;
echo $texto;
echo $_num;
echo $_text;
echo $textoEntreComillas;
echo $caracterDeEscape;

// Para que se vea separado se debe concatenar con . y <br> es el salto de página
echo "<br>"."Mostrando el contenido de las variables (Así se ve concatenando el salto de línea):"."<br>";
echo $numero . "<br>";
echo $texto . "<br>";
echo $_num . "<br>";
echo $_text . "<br>";
echo $textoEntreComillas . "<br>";
echo $caracterDeEscape . "<br>";

?>