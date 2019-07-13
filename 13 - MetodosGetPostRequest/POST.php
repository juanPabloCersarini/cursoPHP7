<?php
    if ($_POST){
        $nombre = $_POST['nombre'];
        $dir = $_POST['dire'];
        echo "Tu nombre es $nombre y tu dirección es $dir";
    }
?>
<form action=""  method="POST">
    <p>
        <label>Nombre:</label>
        <input type ="text" name="nombre">
        <label>Dirección:</label>
        <input type ="text" name="dire">
    </p>
        <input type ="submit" value="enviar">
</form>