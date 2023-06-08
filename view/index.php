<?php
// controller/index.php

require_once '../config.php';
require_once '../model/formularioProyecto.php';

// Crear una instancia de la clase formularioProyecto
$formularioProyecto = new formularioProyecto($conn);

// Si se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $categoriaProyecto = $_POST["categoriaProyecto"];
    $descripcion = $_POST["descripcion"];

    try {
        // Insertar la solicitud en la base de datos
        $formularioProyecto->insertarSolicitud($nombre, $correo, $categoriaProyecto, $descripcion);

        // Verificar si la inserción fue exitosa
        if ($conn->affected_rows > 0) {
            echo "Los datos se han insertado correctamente en la base de datos.";
        } else {
            echo "Error al insertar los datos en la base de datos.";
        }
    } catch (Exception $e) {
        echo "Error al insertar los datos en la base de datos: " . $e->getMessage();
    }
}

// Obtener todas las solicitudes de la base de datos
try {
    $solicitudes = $formularioProyecto->obtenerSolicitudes();
} catch (Exception $e) {
    echo "Error al obtener las solicitudes de la base de datos: " . $e->getMessage();
    $solicitudes = array(); // En caso de error, asignar un arreglo vacío para evitar problemas en la vista
}

// Cargar la vista del formulario
require_once '../view/paginaPrincipal.php';
?>