<?php
// model/formularioTestimonios.php

if (!class_exists('formularioTestimonios')) {
    class formularioTestimonios {
        private $conn;

        
        public function __construct($conn) {
            $this->conn = $conn;
        }

        
        public function insertarTestimonio($nombreTestimonio, $puesto, $calificacion, $comentario) {
            $sql = "INSERT INTO tablatestimonios (nombreTestimonio, puesto, calificacion, comentario) VALUES (?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("ssss", $nombreTestimonio, $puesto, $calificacion, $comentario);
            $stmt->execute();
            $stmt->close();
        }

        
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