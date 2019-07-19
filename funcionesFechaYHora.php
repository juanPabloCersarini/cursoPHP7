<?php
/* time() = devuelve la cantidad de segundos desde 1/1/1970
* getdate() = acepta un timestamp y devuelve un array asociativo
* date(formato,timestamp) = devuelve una cadena formateada de fecha
*   a = am pm
    A = AM PM
    d = día del mes
    D = día de la semana en 3 letras
    F = nombre del mes
    h = hora en formato 12 horas
    H = hora en formato 24 horas
    g = hora en formato 12 horas sin 0 inicial
    G = hora en formato 24 horas sin 0 inicial
    i = minutos
    j = dia del mes sin 0
    l = dia de la semana
    L = mes del año con 0
    M = mes del año con 3 letras
    r = fecha en formato rfc 2822
    n = mes del año sin 0
    s = segundos 
    U = timestamp
    y = año en 2 dígitos
    Y = año en 4 dígitos
    z = día del año
    Z = diferencia en segundos con respecto a GMT
*/

echo time();
echo "<hr>";
print_r(getdate());
echo "<hr>";
$fecha=getdate();
echo $fecha['seconds']." ";
echo $fecha['month'];
echo "<hr>";
echo date("h:i:s a");
echo "<hr>";
echo date("d, M, y");

?>