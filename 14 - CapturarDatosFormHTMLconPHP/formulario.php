<form action ="capturarDatos.php" method ="POST">
    <p>
        <label>Nombre</label>
        <input type="text" name ="nombre"><br>
        <label>Apellido</label>
        <input type="text" name ="apellido"><br><br>
        <label>Carrera</Label><br>
        <select name="carrera">
            <option value="1">Ingeniería en Sistemas o Redes</option>
            <option value="2">Técnico en Hardware</option>
            <option value="3">Ingeniero Elecrónico</option>
        </select><br><br>
        <label>Estado Civil</label><br>
            <input type="radio" name="estCivil" value="Casado">Casado
            <input type="radio" name="estCivil" value="Soltero">Soltero
            <input type="radio" name="estCivil" value="Divorciado">Divorciado
        <br><br>
        <label>Pasatiempos</label><br>
            <input type="checkbox" name="pasatiempos[]" value="Programar">Programar
            <input type="checkbox" name="pasatiempos[]" value="Pintar Mandalas">Pintar Mandalas
            <input type="checkbox" name="pasatiempos[]" value="Cocinar">Cocinar
        <br><br>
        <label>Acerca de mi</label><br>
            <textarea rows="5" columns="25" name="acerca"></textarea>
        <br><br>
        <input type="submit" value="Enviar">
    </p>
</form