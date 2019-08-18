<?php
    // Una clase abstracta no se puede instanciar para dar forma a un objeto
    // Ver archivo claseAbstracta2.php
    include("persona2.php");

    $persona = new Persona();

    $persona->setNombre("juan");
    $persona->setApellido("cesarini");
    $persona->setFecha_nac("07/07/1974");
    $persona->setEdad(45);

?>