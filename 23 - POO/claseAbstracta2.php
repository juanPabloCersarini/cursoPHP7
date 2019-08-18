<?php
    // Una clase abstracta no se puede instanciar para dar forma a un objeto
    // Ver archivo claseAbstracta2.php
    include("estudiante2.php");

    $persona = new Estudiante2("contabilidad",10,"ifts16");

    echo "<h1>HEREDANDO UNA CLASE ABSTRACTA</h1>";
    $persona->setNombre("juan");
    $persona->setApellido("cesarini");
    $persona->setFecha_nac("07/07/1974");
    $persona->setEdad(45);
    /*$persona->setMateria();
    $persona->setPromedio();
    $persona->setInstituto();*/

    mostrarDatos($persona);

     function mostrarDatos(Estudiante2 $dato){
        echo "<table style='background: grey';>";
        echo "<tr><td style='color: blue';>Nombre</td>";
        echo "<td style='color: blue';>Apellido</td>";
        echo "<td style='color: blue';>Fecha Nac</td>";
        echo "<td style='color: blue';>Edad</td>";
        echo "<td style='color: blue';>Materia</td>";
        echo "<td style='color: blue';>Promedio</td>";
        echo "<td style='color: blue';>Instituto</td></tr>";
        echo "<tr><td style='color: red';>".$dato->getNombre()."</td>";
        echo "<td style='color: red';>".$dato->getApellido()."</td>";
        echo "<td style='color: red';>".$dato->getFecha_nac()."</td>";
        echo "<td style='color: red';>".$dato->getEdad()."</td>";
        echo "<td style='color: red';>".$dato->getMateria()."</td>";
        echo "<td style='color: red';>".$dato->getPromedio()."</td>";
        echo "<td style='color: red';>".$dato->getInstituto()."</td>";
        echo"</tr></table>";
    }
?>