<?php
// controllers/procesarLogin.php

require_once '../config/baseDatos.php';

require_once 'model/formularioLogin.php';
require_once 'helpers/contrasenaHelper.php';
require_once 'helpers/correoHelper.php';

class procesarLogin {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombreUsuario = $_POST['nombreUsuario'];
            $contrasena = $_POST['contrasena'];

            $usuario = (new formularioLogin())->obtenerLogIn_PorUsuario($nombreUsuario);

            if ($usuario) {
                if ($usuario['bloqueado']) {
                    echo 'Tu cuenta ha sido bloqueada. Por favor, ponte en contacto con el administrador.';
                    return;
                }

                if (contrasenaHelper::validarContrasena($contrasena, $usuario['contrasena'])) {
                    // Inicio de sesión exitoso
                    // Restablecer el contador de intentos fallidos
                    (new formularioLogin())->actualizarUsuario($nombreUsuario, [
                        'contrasena' => null,
                        'bloqueado' => 0
                    ]);

                    // Registrar el inicio de sesión exitoso
                    (new formularioLogin())->RegistroActividadLogin($nombreUsuario, 'Correcto');

                    // Redirigir al usuario a la página de inicio después del inicio de sesión
                    header('Location: paginaAdministracion.php');
                } else {
                    // Contraseña incorrecta
                    $intentosFallidos = isset($usuario['intentosFallidos']) ? $usuario['intentosFallidos'] + 1 : 1;
                    $bloqueado = $intentosFallidos >= 3 ? 1 : 0;

                    // Actualizar el número de intentos fallidos y bloqueo de usuario
                    (new formularioLogin())->actualizarUsuario($nombreUsuario, [
                        'contrasena' => contrasenaHelper::contrasenaEncriptada($contrasena),
                        'bloqueado' => $bloqueado
                    ]);

                    // Registrar el intento de inicio de sesión fallido
                    (new formularioLogin())->RegistroActividadLogin($nombreUsuario, 'Incorrecto');

                    if ($bloqueado) {
                        echo 'Has excedido el número máximo de intentos fallidos. Tu cuenta ha sido bloqueada.';
                    } else {
                        echo 'Contraseña incorrecta. Por favor, intenta nuevamente.';
                    }
                }
            } else {
                // Usuario no encontrado
                echo 'Usuario no encontrado. Por favor, verifica tus credenciales.';
            }
        } else {
            // Mostrar formulario de inicio de sesión
            require 'views/paginaLogin.php';
        }
    }
}
