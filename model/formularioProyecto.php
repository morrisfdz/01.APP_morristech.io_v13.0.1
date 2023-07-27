<?php
// model/formularioProyecto.php

// Valida si la clase existe para poder realizar el proceso
if (!class_exists('formularioProyecto')) {
   
    class formularioProyecto {
        private $conn;

        //Método que conecta con BD
        public function __construct($conn) {
            $this->conn = $conn;
        }
    
        //Inserta en BD
        public function insertarSolicitud($nombre, $correo, $categoriaProyecto, $descripcion) {
            $sql = "INSERT INTO tablasolicitudproyectos (nombre, correo, categoriaProyecto, descripcion) VALUES (?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("ssss", $nombre, $correo, $categoriaProyecto, $descripcion);
            $stmt->execute();
            $stmt->close();
        }
    
        // Obtiene datos de BD
        public function obtenerSolicitudes($pagi, $cant_Datos) {
            $sql = "SELECT * FROM tablasolicitudproyectos LIMIT " . (($pagi - 1) * $cant_Datos) . ", $cant_Datos";

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
    
}
?>
