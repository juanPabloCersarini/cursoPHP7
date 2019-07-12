<?php
function sumar(int $a, int $b){
    return $a+$b;
}

$x= $_GET['pnum'];
$y= $_GET['snum'];

echo sumar($x,$y);
// ojo!! no se tiene que usar para leer contraseñas del formulario ya que pasa por url y queda a la vista
?>