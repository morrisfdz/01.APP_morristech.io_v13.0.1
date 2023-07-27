<?php
//services/TipoDeCambioActual_Model.php

class TipoDeCambioActual_Model {

    private $apiToken;

    public function __construct($apiToken) {
        $this->apiToken = $apiToken;
    }

    public function getCurrencyExchangeRate() {
        try {
            $url = "https://gee.bccr.fi.cr/Indicadores/Suscripciones/WS/wsindicadoreseconomicos.asmx/ObtenerIndicadoresEconomicos";
            $url .= "?token=" . $this->apiToken;
            $url .= "&tcIndicador=318"; // Código para el tipo de cambio del dólar
            $url .= "&tcFechaInicio=" . date("d/m/y");
            $url .= "&tcFechaFinal=" . date("d/m/y");
            $url .= "&tcNombre=NoSirve"; // Valor de ejemplo para este parámetro

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);

            if ($response === false) {
                $error = curl_error($curl);
                throw new Exception("Error en la solicitud cURL: " . $error, 400);
            }

            curl_close($curl);

            $xml = simplexml_load_string($response);

            if ($xml === false) {
                return null;
            }

            $data = json_decode(json_encode($xml), true);

            if (isset($data['NUM_VALOR'])) {
                return $data['NUM_VALOR'];
            } else {
                return null;
            }

        } catch (\Throwable $th) {
            echo "Error: " . $th;
        }
    }
}
?>

