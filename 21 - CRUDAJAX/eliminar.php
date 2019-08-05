<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous"></script>

  <!--<script type="javascript" src ="js/guardar.js"></script>
  <script type="javascript" src ="js/envio.js"></script>-->
  
 <script>
  eliminar = function() {
    var codigo = document.getElementById("id").value;
   // var cliente = document.getElementById("eliminar").value;
    var url = "controlador.php?action=eliminarCli";
   // var form = document.getElementById("eliminarCli");
    //alert(form);
    $.ajax({
        type: "post",
        url: url,
        data: { idCli: codigo },
        success: function(datos) {
            
           $("#mostrarDatos").html(datos);
           //alert(form);
          // document.getElementById("eliminarCli").reset();
           /*let modificar = "<a href=controlador.php?action=modificarCli("+id+")>Modificar</a>";
           let eliminar = "<a href=controlador.php?action=eliminarCli("+id+")>Eliminar</a>"; 
           let tr = "<tr><td>"+id+"</td><td>"+n+"</td><td>"+a+"</td><td>"+d+"</td><td>"+modificar+"</td><td>"+eliminar+"</td></tr>";
           $("#mostrarDatos").append(tr);*/
           //$("#id" + codigo).remove();
        }    
    });
    borrarForm();
    function borrarForm(){
        document.getElementById("eliminarCli").reset();
    }
}

  </script>

    <title>CRUD AJAX</title>
</head>
<body>
    <div class="row">
    <div class="container col-lg-4 d-inline-block" >
        <h1>Datos</h1>
        <form method = "post" action ="" id="eliminarCli">
           <?php
            if ($_GET){
                $idCli = $_GET['idCli'];
                include("crud.php");
                $crud = new Crud;
                $clientes = $crud -> consultarUnCliente($idCli);
            }
           ?>
           <div class="form-group">
            <p>
                <label>ID:</label>
                <input type="text"class="form-control" id="id"name ="id" readonly="true" value="<?php echo $idCli;?>"><br>
                <label>Nombre:</label>
                <input type="text"class="form-control" id="n"name ="nombre" required="true" value="<?php echo $clientes['nCli'];?>"maxlength ="30" minlength="3"><br>
                <label>Apellido:</label>
                <input type="text" class="form-control" id="a"name ="apellido" required="true" value="<?php echo $clientes['aCli'];?>"maxlength ="30" minlength="3"><br>
                <label>Dirección</label>
                <input type="text" class="form-control" id="d" name ="dire" required="true" value="<?php echo $clientes['dirCli'];?>" maxlength ="100" minlength="3"><br>
            </p>
            <input type ="button"class="btn btn-primary" value="Eliminar" onclick="eliminar()">
            <input type ="reset" class="btn btn-danger" value="Cancelar">
            </div>
        </form>  
    </div>
    <div class="container col-lg-8 d-inline-block">  
        <table class ="table table-striped " id="mostrarDatos">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Dirección</th>
                <th colspan="2">Opciones</th>
            </tr>
            <?php
                $clientes = $crud -> consultarClientes();
                foreach ($clientes as $cli) {
                    echo "<tr id=id{$cli['idCli']}>
                            <td >{$cli['idCli']}</td>
                            <td>{$cli['nCli']}</td>
                            <td>{$cli['aCli']}</td>
                            <td>{$cli['dirCli']}</td>
                            <td><a href='modificar.php?idCli={$cli['idCli']}'>Modificar</a></td>
                            <td><a href='eliminar.php?idCli={$cli['idCli']}'>Eliminar</a></td>
                          </tr>";
                }
            ?>
        </table>
   </div>
</div>
    <script type="javascript" src="js/bootstrap.js"></script>
</body>
</html>
