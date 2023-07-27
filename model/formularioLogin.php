<?php
// models/FormularioLogin.php

require_once 'config/baseDatos.php';

class formularioLogin
{
    private $db;


  
    //PRUEBA DE CONEXION DE BASE DE DATOS
    public function __construct() {
        $this->db = new PDO('mysql:host=' .config('database.$dbHost') . ';dbname=' . config('database.$dbName'), config('database.$dbUser'), config('database.$dbPass'));
        
    }
   

    public function obtenerLogIn_PorUsuario($nombreUsuario)
    {
        $stmt = $this->db->prepare('SELECT * FROM tablaUsuarios WHERE nombreUsuario = :nombreUsuario');
        $stmt->execute(['nombreUsuario' => $nombreUsuario]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizarUsuario($nombreUsuario, $data)
    {
        $stmt = $this->db->prepare('UPDATE tablaUsuarios SET contrasena = :contrasena, bloqueado = :bloqueado WHERE nombreUsuario = :nombreUsuario');
        $stmt->execute([
            'contrasena' => $data['contrasena'],
            'bloqueado' => $data['bloqueado'],
            'nombreUsuario' => $nombreUsuario
        ]);
    }

    public function RegistroActividadLogin($nombreUsuario, $estadoLogin)
    {
        $stmt = $this->db->prepare('INSERT INTO tablaauditorialogin (nombreUsuario, tiempoLogin, estadoLogin) VALUES (:nombreUsuario, NOW(), :estadoLogin)');
        $stmt->execute(['nombreUsuario' => $nombreUsuario, 'estadoLogin' => $estadoLogin]);
    }
}