<?php
// helpers/correoHelper.php

class MailHelper {
    public static function envialCorreo($para, $asunto, $mensaje) {
        $textos = "De: morrisfdz2016@gmail.com" . "\r\n";
        $textos .= "Enviado a: tu_correo@tudominio.com" . "\r\n";
        $textos .= "Content-type: text/html; charset=UTF-8" . "\r\n";

        mail($para, $asunto, $mensaje, $textos);
    }
}