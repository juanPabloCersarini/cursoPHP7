<?php
// evaluar un mail

// consultar https://www.php.net/manual/es/book.pcre.php

$email="juan.p.cesarini@gmail.com";
echo preg_match("/^[a-z0-9]+([.][a-z0-9]+)*[@]+[a-z0-9]+[.]+[a-z]/",$email);
// este caso da verdadero
echo "<hr>";
// evaluar IP

$ip = "127.256.0.1";
echo preg_match("/^(([0]?[0-9]?[0-9]|
                     [1][0-9][0-9]  |
                     [2][0-5[0-5])[.]){3}
                    ([0]?[0-9]?[0-9]|
                     [1][0-9][0-9]  |
                     [2][0-5[0-5])$/x", $ip);
?>