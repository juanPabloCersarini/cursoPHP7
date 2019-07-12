<?php
    $configuracion = "config.json";
    $conf = json_decode(file_get_contents($configuracion)); // convierte el JSON en una clase de PHP
    print_r($conf->db);
    echo "<hr>";
    $conf->db->servidor ="localhost";
    $conf->db->usuario="root";
    $conf->db->password="1234";
    $conf->db->tabla="baseClientes";
    print_r($conf->db);
    echo "<hr>";
    print_r($conf->usuario);

    $conf->usuario->nombre="pedro";
    $archivoConfig = fopen($configuracion,"w+");
    fwrite($archivoConfig,json_encode($conf));
    fclose($archivoConfig);
    echo "<br>";
    print_r($conf->usuario);



?>