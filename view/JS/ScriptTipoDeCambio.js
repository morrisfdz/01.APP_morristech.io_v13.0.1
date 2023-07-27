//view/JS/ScriptTipoDeCambio.js

$(document).ready(function() {

    $.ajax({
        url: '../services/procesar_TipoDeCambio.php',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                $('#exchange-rate').text(response.exchangeRate);
            } else {
                $('#exchange-rate').text('Error al obtener el tipo de cambio');
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $('#exchange-rate').text('Error al conectar con el servidor');
            console.log("Error detallado 1: " + " " + textStatus);
            console.log("Error detallado 2: " + " " + errorThrown);
            console.log("Código de estado HTTP: " + jqXHR.status);
            console.log("Texto del estado HTTP: " + jqXHR.statusText);
        }
    });
});