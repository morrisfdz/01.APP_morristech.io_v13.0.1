<?php
// helpers/contrasenaHelper.php

class contrasenaHelper {
    public static function contrasenaEncriptada($contrasena) {
        return password_hash($contrasena, PASSWORD_DEFAULT);
    }

    public static function validarContrasena($contrasena, $hashedPassword) {
        return password_verify($contrasena, $hashedPassword);
    }
}