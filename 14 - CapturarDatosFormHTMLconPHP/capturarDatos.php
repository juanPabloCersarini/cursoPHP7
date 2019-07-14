<?php
    if ($_POST){
        $nombre= $_POST['nombre'];
        $apellido =$_POST['apellido'];
        $carrera=$_POST['carrera'];
        $ec =$_POST['estCivil'];
        $pasatiempos =$_POST['pasatiempos'] ?? null;
        $demi=$_POST['acerca'];


        echo "Tu nombre completo es: $nombre $apellido". "<br>";
        echo "Tu carrera es: ";
        switch ($carrera) {
            case '1':
                echo "Ingeniería en Sistemas o Redes"."<br>";
                break;
            
            case '2':
                echo "Técnico en Hardware"."<br>";
                break;
            case '3':
            echo "Ingeniero Elecrónico"."<br>";
        }
        echo "Tu estado civil es: $ec"."<br>";
        echo "Tus pasatiempos son: "."<br>";
       if($pasatiempos){
            for ($i=0; $i<=count($pasatiempos)-1; $i++) {
                 echo "<li> $pasatiempos[$i] </li>";
            }
       }else{
           echo "No se seleccionó el pasatiempo"."<br>";
       }
        
        echo "<br>";
        echo "Lo que decis de vos: $demi" ;
    }
?>