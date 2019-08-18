<?php
    require("estudiante.php");

$pedro = new Estudiante("analisis", 8, "ifts16");

echo "<h1 style='text-align:center'>USANDO HERENCIA</h1>";
$pedro->setNombre("pedro");
$pedro->setApellido("gomez");
$pedro->setFecha_nac("10/10/2000");
$pedro->setEdad(18);
datosEstudiante($pedro);
echo "<hr>";

function datosEstudiante(Estudiante $alumno){
    echo "nombre es: " . $alumno->getNombre()."<br>";
    echo "apellido es: " . $alumno->getApellido()."<br>";
    echo "fecha de nacimiento es: " . $alumno->getFecha_nac()."<br>";
    echo "<div style=color='red';>DATOS PROPIOS DE LA CLASE ESTUDIANTE</div>";
    $alumno->cumplirAnios()."<br>";
    echo "materia: " .$alumno->getMateria()."<br>";
    echo "promedio: " .$alumno->getPromedio()."<br>";
    echo "instituto: ".$alumno->getInstituto()."<br>";
}

?> 