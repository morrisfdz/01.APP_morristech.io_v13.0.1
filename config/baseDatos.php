<?php
// config/baseDatos.php

//WAMP
/*
$dbHost = 'localhost'; // Cambia esto si tu servidor de base de datos no está en tu máquina local
$dbUser = 'root';
$dbPass = '';
$dbName = 'morristech.io';
*/

//Plesk (funcionando 12-7-23)
$dbHost = 'tiusr4pl.cuc-carrera-ti.ac.cr';
$dbUser = 'morris';
$dbPass = 'Morris.0335#';
$dbName = 'morristech.io';

// Crear la conexión
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}
?>

