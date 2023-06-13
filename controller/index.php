<?php
// controller/index.php

require_once '../config.php';
include '../controller/procesarProyecto.php';
include '../controller/procesarTestimonios.php';
include '../model/formularioProyecto.php';
include '../model/formularioTestimonios.php';


// Obtener todas las solicitudes de la base de datos
try {
    $solicitudes = $formularioProyecto->obtenerSolicitudes();
} catch (Exception $e) {
    echo "Error al obtener las solicitudes de la base de datos: " . $e->getMessage();
    $solicitudes = array(); // En caso de error, asignar un arreglo vacío para evitar problemas en la vista
}

// Obtener todas las testimonios de la base de datos
try {
    $testimonios = $formularioTestimonios->obtenerTestimonios();
} catch (Exception $e) {
    echo "Error al obtener los testimonios de la base de datos: " . $e->getMessage();
    $testimonios = array(); // En caso de error, asignar un arreglo vacío para evitar problemas en la vista
}

// Cargar la vista del formulario
include '../view/paginaPrincipal.php';
?>

