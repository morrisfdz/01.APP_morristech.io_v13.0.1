<?php
//services/procesar_TipoDeCambio.php

try {
    require_once '../services/TipoDeCambioActual_Model.php';

    $apiToken = '277NI3RMCR'; // Reemplaza 'TU_TOKEN' por tu token real

    $model = new TipoDeCambioActual_Model($apiToken);
    $exchangeRate = $model->getCurrencyExchangeRate();

    $response = array();
    if ($exchangeRate !== null) {
        $response['success'] = true;
        $response['exchangeRate'] = $exchangeRate;
    } else {
        $response['success'] = false;
    }

    // Añade un encabezado adicional para evitar problemas de almacenamiento en caché
    header('Cache-Control: no-cache, must-revalidate');

    // Añade el encabezado Access-Control-Allow-Origin para permitir solicitudes desde otro dominio
    header('Access-Control-Allow-Origin: *');

    // Devuelve la respuesta JSON
    echo json_encode($response);

} catch (\Throwable $th) {
    http_response_code(400); // Establece el código de estado HTTP a 400
    $response = array('success' => false, 'error' => $th->getMessage());
    echo json_encode($response);
}


//277NI3RMCR

?>











