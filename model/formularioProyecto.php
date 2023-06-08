<?php
// model/formularioProyecto.php

class formularioProyecto {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function insertarSolicitud($nombre, $correo, $categoriaProyecto, $descripcion) {
        $sql = "INSERT INTO tablasolicitudproyectos (nombre, correo, categoriaProyecto, descripcion) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssss", $nombre, $correo, $categoriaProyecto, $descripcion);
        $stmt->execute();
        $stmt->close();
    }

    public function obtenerSolicitudes() {
        $sql = "SELECT * FROM tablasolicitudproyectos";
        $result = $this->conn->query($sql);

        $solicitudes = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $solicitudes[] = $row;
            }
        }

        return $solicitudes;
    }
}
?>