<?php

/*switch ($) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}*/
// ideal cuando hay distintas acciones para distintos valores de una misma variable
$opcion = 9;

switch ($opcion) {
    case 1:
        echo "hoy es domingo". "<br>";
        break;
    case 2:
        echo "hoy es lunes". "<br>";
        break;
    case 3:
        echo "hoy es martes". "<br>";
        break;
    case 4:
        echo "hoy es miercoles". "<br>";
        break;
    case 5:
        echo "hoy es jueves". "<br>";
        break;
    case 6:
        echo "hoy es viernes". "<br>";
        break;
    case 7:
        echo "hoy es sabado". "<br>";
        break;
    default:
        echo "la semana solo tiene 7 dias";
        break;
}
?>