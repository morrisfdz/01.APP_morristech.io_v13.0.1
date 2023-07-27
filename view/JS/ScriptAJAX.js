$(document).ready(function () {
    $('#tablaSolicitudes').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "../controller/obtenerSolicitudes.php", // Archivo PHP para obtener los datos de la base de datos
            "type": "POST",
            "data": {
                "paginacion": 1,
                "cantidadDatos": 10,
                // Agrega aquí más parámetros si es necesario
            }

        },
        "columns": [
            { "data": "id" },
            { "data": "nombre" },
            { "data": "correo" },
            { "data": "categoriaProyecto" },
            { "data": "descripcion" }
        ]
    });
});