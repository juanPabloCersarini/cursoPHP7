<?php
// Las sesiones se guardan en el servidor. 
session_start();
$_SESSION["'usuario"]="juan";
$_SESSION["id_usuario"]=8;

print_r($_SESSION);
// unset(); permite borrar un valor
// session_destroy(); elimina todo 

?>