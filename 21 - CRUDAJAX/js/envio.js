enviarDatos = function() {
    var n = document.getElementById("n").value;
    var a = document.getElementById("a").value;
    var d = document.getElementById("d").value;
    var url = "controlador.php?action=enviarCli";

    $.ajax({
        type: "post",
        url: url,
        data: { nombre: n, apellido: a, dire: d },
        success: function(datos) {
            // $("#mostrarDatos").html(datos);
            let idCli = datos;
            let modificar = "<a href=javascritp:modificarCli(" + idCli + ")>Modificar</a>";
            let eliminar = "<a href=javascritp:eliminarCli(" + idCli + ")>Eliminar</a>";
            let tr = "<tr><td>" + idCli + "</td><td>" + n + "</td><td>" + a + "</td><td>" + d + "</td><td>" + modificar + "</td><td>" + eliminar + "</td></tr>";
            $("#mostrarDatos").append(tr);
            $("#guardarCli")[0].reset();

        }
    });
}