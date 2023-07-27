<?php
// controller/procesarProyecto.php

require_once '../config/baseDatos.php';
include '../model/formularioProyecto.php';


// Crear una instancia de la clase formularioProyecto
$formularioProyecto = new formularioProyecto($conn);

// Si se envía el formulario de formularioProyecto
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar si los campos requeridos están presentes en el formulario
    if (isset($_POST["nombre"]) && isset($_POST["correo"]) && isset($_POST["categoriaProyecto"]) && isset($_POST["descripcion"])) {
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
    } else {
        echo "Por favor, complete todos los campos del formulario.";
    }
}
?>

