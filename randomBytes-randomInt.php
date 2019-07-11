<?php
//random_bytes — Genera bytes seudoaleatorios criptográficamente seguros
echo random_bytes(10);

echo "<br>";
echo bin2hex(random_bytes(10)); // convierte binario a hexadecimal
echo "<hr>";
echo random_int(5,8); // te da los numeros aleatoreamente entre el min y el max en este caso 5 y 8

?>