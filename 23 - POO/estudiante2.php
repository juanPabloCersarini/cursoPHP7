<?php
// La clase estudiante va a heredar los atributos de la clase persona
// se debe incluir el archivo donde se encuentra la clase padre
// usar la palabra reservada extends

require("persona2.php");

class Estudiante2 extends Persona2{
    private $materia;
    private $promedio;
    private $instituto;

    function __construct(string $materia, int $promedio, string $instituto){
        parent::__construct();
        $this->materia = $materia;
        $this->promedio = $promedio;
        $this->instituto = $instituto;
    }
    public function getMateria():string{
        return $this->materia;
    }

    public function setMateria(string $materia):boolean{
        $this->materia =$materia;
        return true;
    }

    public function getPromedio():int{
        return $this->promedio;
    }

    public function setPromedio(string $promedio):boolean{
        $this->promedio =$promedio;
        return true;
    }

    public function getInstituto():string{
        return $this->instituto;
    }

    public function setInstituto(string $instituto):boolean{
        $this->instituto =$instituto;
        return true;
    }
    
   
}
?>