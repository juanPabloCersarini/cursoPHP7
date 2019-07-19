<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir Archivos</title>
</head>
<body>
    <form action ="subir.php" method="POST" enctype ="multipart/form-data">
        <input type ="file" name ="archivo"><br>
        <input type ="file" name ="arch[]"><br>
        <input type ="file" name ="arch[]"><br>
        <input type ="file" name ="arch[]"><br>
        <input type="file" multiple ="true" name="variosArch[]"><br> 
        <input type="submit" value="Subir Archivo">

    </form>
</body>
</html>