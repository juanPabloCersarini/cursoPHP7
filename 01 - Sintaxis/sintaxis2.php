<?php
$numero=10;
$Numero=20;

echo "Primer número: " . $numero;
echo "<br>"."Segundo número: " .$Numero;

/* El nombre se las variables no reconocen como la misma letra la mayúscula que la minúscula
* En el caso de los métodos se puede definir de una manera y ser llamados de otra
* IMPORTANTE: llave que se abre, llave que se cierra {} los () sirven para agrupar expresines
* ya sea en las condiciones de if o bubles como for o while, sino también para operaciones matemáticas
*/

    if ($numero!=$Numero) {
        echo "<br>"."son distintos";
    }
?>