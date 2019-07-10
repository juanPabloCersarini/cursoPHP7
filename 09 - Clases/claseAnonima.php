<?php
/*En PHP 7 se ha añadido soporte para clases anónimas. Las clases anónimas son útiles cuando
 *es necesario crear objetos sencillos y únicos.
 */

interface Registro { 
    public function reg(string $mensaje);
}
class Aplicacion {
    private $registro;
    public function getRegistro() : Registro {
        return $this->registro;
    }
    public function setRegistro(Registro $registro){
        $this->registro = $registro;
    }
}
$app = new Aplicacion();
$app->setRegistro(new class implements Registro{
    public function reg(string $mensaje){
        print($mensaje);
    }
});
$app->getRegistro()->reg("mensaje");
?>