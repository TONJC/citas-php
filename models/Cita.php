<?php
require_once 'Conexion.php';

class Cita {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function obtenerCitas() {
        $query = "SELECT * FROM citas ORDER BY cita_fec, cita_hora";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function crearCita($cita_correo, $cita_nomcliente, $cita_fec, $cita_hora, $cita_servicio) {
        $query = "INSERT INTO citas (cita_correo, cita_nomcliente, cita_fec, cita_hora, cita_servicio) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$cita_correo, $cita_nomcliente, $cita_fec, $cita_hora, $cita_servicio]);
    }
}
