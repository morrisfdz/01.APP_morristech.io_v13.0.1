<?php
// model/formularioTestimonios.php

// Valida si la clase existe para poder realizar el proceso
if (!class_exists('formularioTestimonios')) {
    class formularioTestimonios {
        private $conn;

        //Método que conecta con BD
        public function __construct($conn) {
            $this->conn = $conn;
        }

        //Inserta en BD
        public function insertarTestimonio($nombreTestimonio, $puesto, $calificacion, $comentario) {
            $sql = "INSERT INTO tablatestimonios (nombreTestimonio, puesto, calificacion, comentario) VALUES (?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("ssss", $nombreTestimonio, $puesto, $calificacion, $comentario);
            $stmt->execute();
            $stmt->close();
        }

        // Obtiene datos de BD
        public function obtenerTestimonios() {
            $sql = "SELECT * FROM tablatestimonios";
            $result = $this->conn->query($sql);

            $testimonios = array();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $testimonios[] = $row;
                }
            }

            return $testimonios;
        }
    }
}
?>