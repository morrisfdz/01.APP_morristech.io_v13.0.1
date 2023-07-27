<?php
// procesarTestimonios.php

require_once '../config/baseDatos.php';
include '../model/formularioTestimonios.php';

// Crear una instancia de la clase formularioTestimonios
$formularioTestimonios = new formularioTestimonios($conn);

// Si se envía el formulario de formularioTestimonios

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar si los campos requeridos están presentes en el formulario
    if (isset($_POST["nombreTestimonio"]) && isset($_POST["puesto"]) && isset($_POST["calificacion"]) && isset($_POST["comentario"])) {
        $nombre = $_POST["nombreTestimonio"];
        $puesto = $_POST["puesto"];
        $calificacion = $_POST["calificacion"];
        $comentario = $_POST["comentario"];

        try {
            // Insertar la testimonios en la base de datos
            $formularioTestimonios->insertarTestimonio($nombre, $puesto, $calificacion, $comentario);

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