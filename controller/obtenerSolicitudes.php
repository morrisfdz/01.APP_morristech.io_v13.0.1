<?php
// controller/obtenerSolicitudes.php

require_once '../config/baseDatos.php';
require_once '../model/formularioProyecto.php';

$formularioProyecto = new formularioProyecto($conn);
$solicitudes = $formularioProyecto->obtenerSolicitudes(1,10); // (Paginación , Cantidad de datos)

$response = array(
  "draw" => intval($_POST['draw']),
  "recordsTotal" => count($solicitudes),
  "recordsFiltered" => count($solicitudes),
  "data" => $solicitudes
);

echo json_encode($response);
?>


