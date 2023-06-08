<?php
// config.php

$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'morristech.io';

// Crear la conexión
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}
?>