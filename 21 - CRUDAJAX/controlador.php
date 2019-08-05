<?php
    include("crud.php");
    
    if ($_GET){
        $action = $_GET['action'];
        if (function_exists($action)){
            call_user_func($action);
        }
    }
    function enviarCli(){
        $crud = new Crud();
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dire = $_POST['dire'];
        $crud -> guardarCliente($nombre, $apellido, $dire);
        $idCliente = $crud -> cnx -> lastInsertId();
        echo $idCliente;
    }
    function modificarCli(){
        $crud = new Crud();
        $idCliente =$_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dire = $_POST['dire'];
        $crud -> modificarCliente($nombre, $apellido, $dire, $idCliente);
        echo "<tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Dirección</th>
                <th colspan='2'>Opciones</th>
            </tr>";
            $clientes = $crud -> consultarClientes();
            foreach ($clientes as $cli) {
                    echo "<tr id={$cli['idCli']}>
                            <td>{$cli['idCli']}</td>
                            <td>{$cli['nCli']}</td>
                            <td>{$cli['aCli']}</td>
                            <td>{$cli['dirCli']}</td>
                            <td><a href='modificar.php?idCli={$cli['idCli']}'>
                            <button type='button' class='btn btn-success'>Modificar</button></a></td>
                            <td>
                            <button type='button' class='btn btn-warning' onclick='eliminar({$cli['idCli']})'>Eliminar</button></a></td>
                          </tr>";
                }

    }

    function eliminarCli(){
        $crud = new Crud();
        $idCliente = $_POST['idCli'];
        $crud -> borrarCliente($idCliente);
        echo "<tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Dirección</th>
                <th colspan='2'>Opciones</th>
            </tr>";
            $clientes = $crud -> consultarClientes();
            foreach ($clientes as $cli) {
                echo "<tr id={$cli['idCli']}>
                            <td>{$cli['idCli']}</td>
                            <td>{$cli['nCli']}</td>
                            <td>{$cli['aCli']}</td>
                            <td>{$cli['dirCli']}</td>
                            <td><a href='modificar.php?idCli={$cli['idCli']}'><button type='button' class='btn btn-success'>Modificar</button></a></td>
                            <td><button type='button' class='btn btn-warning' onclick='eliminar({$cli['idCli']})'>Eliminar</button></td>
                          </tr>";
            }

    }

?>