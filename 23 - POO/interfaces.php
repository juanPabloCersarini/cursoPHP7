<?php
// en una interfaz se definen los métodos que van a tener las clases
interface MiCalculadora{

    public function Sumar(int $a, int $b):int;
    public function Restar(int $a, int $b):int;
    public function Multiplicar(int $a, int $b):int;
    public function Dividir(int $a, int $b):int;
}

class Calculo implements MiCalculadora{

    public function Sumar(int $a, int $b):int{
        return $a + $b;
    }

    public function Restar(int $a, int $b):int{
        return $a - $b;
    }

    public function Multiplicar(int $a, int $b):int{
        return $a * $b;
    }

     public function Dividir(int $a, int $b):int{
        return $a / $b;
    }
}

$calculator = new Calculo();

echo "24+3=".$calculator->Sumar(24,3)."<br>";
echo "24-3=".$calculator->Restar(24, 3)."<br>";
echo "24*3=".$calculator->Multiplicar(24, 3)."<br>";
echo "24/3=".$calculator->Dividir(24, 3)."<br>";
?>
