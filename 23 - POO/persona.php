<?php
/* Una clase es la representación de un objeto,
* tiene atributos (por ej. una persona tiene color de pelo, edad, peso, altura, etc)
* también tiene métodos, acciones del objeto (en este caso, camniar, llorar, correr)
*/
final class Persona { // con la palabra reservada final se impide que se herede
    private $nombre ;
    private $apellido;
    private $fecha_nac;
    private $edad;

    function __construct(){
        $this->nombre;
        $this->apellido;
        $this->fecha_nac;
        $this->edad;
    }

    public function getNombre():string{
        return $this->nombre;
    }

    public function setNombre(string $nombre):string{
        $this->nombre =$nombre;
        return $nombre;
    }

    public function getApellido():string{
        return $this->apellido;
    }

    public function setApellido(string $apellido):string{
        $this->apellido =$apellido;
        return $apellido;
    }

    public function getFecha_nac():string{
        return $this->fecha_nac;
    }

     public function setFecha_nac(string $fecha_nac):string{
        $this->fecha_nac =$fecha_nac;
        return $fecha_nac;
    }

    public function getEdad():int{
        return $this->edad;
    }

     public function setEdad(int $edad):int{
        $this->edad =$edad;
        return $edad;
    }

    final public function cumplirAnios(){
        $this->edad += 1;
    } 
    // con la palabra reservada final no permite que se sobreescriba el metodo, en una clase hija
}
?>