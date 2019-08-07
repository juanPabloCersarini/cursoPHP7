<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous">
    </script>
    <script type="javascript" src="js/bootstrap.js"></script>
    <title>Inicio de Sesión</title>
</head>
<body>
    <div class="container">
        <div class="col-lg-4 col-lg-offset-4" style="border: 2px solid black; padding: 15px; margin-top:10px;">
            <?php
            session_start();
            if (!isset($_SESSION['nombre_usuario'])) {
            ?>
            <form method="post" action="login.php">
            <h3>Inicio de Sesión</h3>
            <div class="form-group">
                <label>Usuario</label>
                <input type="text" class = "form-group" name="nickname" required="true" maxlegth="30">
                <label>Contraseña</label>
                <input type="password" class = "form-group" name="contras" required="true" maxlegth="30">
                <input type="submit" class="btn btn-primary" value="Ingresar">
            </div>
            </form>
            <?php
            }else{
                session_destroy();
                echo "<h1>Bienvenido " . $_SESSION['nombre_usuario']."</h1>";
                echo "<a href='salir.php'><button class='btn btn-primary'>Salir</button></a>";
            }
            ?>
        </div>
    </div>
</body>
</html>