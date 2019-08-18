<?php
require("persona.php");

$JP = new Persona();
$JP->setNombre("juan");
$JP->setApellido("cesarini");
$JP->setFecha_nac("07/07/1974");
$JP->setEdad(45);

$mami = new Persona ();
$mami->setNombre("haydee");
$mami->setApellido("zullo");
$mami->setFecha_nac("09/06/1946");
$mami->setEdad(73);

datosPersona($JP);
echo "<hr>";
datosPersona($mami);
echo "<hr>";
$JP->cumplirAnios();
datosPersona($JP);

function datosPersona (Persona $persona){
    echo "Tu nombre es: " . $persona->getNombre()."<br>";
    echo "Tu apellido es: " . $persona->getApellido()."<br>";
    echo "Tu fecha de nacimiento es: " . $persona->getFecha_nac()."<br>";
    echo "Tu edad es: " . $persona->getEdad()."<br>";

}

// usando HERENCIA
echo "<hr>";
echo "<hr>";

require("estudiante.php");

$pedro = new Estudiante("pedro", "gomez", "10/10/1990", 29, "analisis", 8,"ifts16");
datosEstudiante($pedro);
function datosEstudiante(Estudiante $alumno){
    echo "nombre es: " . $alumno->getNombre()."<br>";
    echo "apellido es: " . $alumno->getApellido()."<br>";
    echo "fecha de nacimiento es: " . $alumno->getFecha_nac()."<br>";
    echo "edad es: " . $alumno->getEdad()."<br>";
    echo "materia: " .$alumno->getMateria()."<br>";
    echo "promedio:" .$alumno->getPromedio()."<br>";
    echo "instituto:".$alumno->getInstituto()."<br>";

}
// de esta manera genera error y ya que el archivo estudiante incluye el archivo persona
// se cae en el error de llamar dos veces al mismo archivo. 
// ver el archivo herencia.php
?>