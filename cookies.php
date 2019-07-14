<?php
    /*
    * Las cookies son archivos de textos almacenados del lado del cliente en el cual
    * se guarda información para luego ser leída, y poder darle seguimiento al cliente
    * tambien irve para mantener ua sesion activa.
    * setcookie(nombre,valor,expiracion,ruta,dominio,seguridad);
        nombre: nombre de la coockie
        valor: valor a almacenar
        expiracion: fecha u hora en que la cookie dejará de ser válida y será eliminada
        ruta: directorios por los cuales la coockie será válida
        dominio: especifica los dominios donde será válida la cookie
    */

    setcookie("usuario","juan",time()+10,"/","",0);
    echo $_COOKIE['usuario'];
?>