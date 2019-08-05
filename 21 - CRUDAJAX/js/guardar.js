$(document).on("submit", "#guardarCli", function(e) {
    e.preventDefault();
    let url = "controlador.php?action=enviarCli";

    $.ajax({
        type: "post",
        url: url,
        data: { nombre: n, apellido: a, dire: d },
        success: function(datos) {
            $("#mostrarDatos").html(datos);
        }
    });

});