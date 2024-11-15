<?php
require_once 'Conexion.php';

class Servicio {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function obtenerServicios() {
        $query = "SELECT id_servicios, nombre_servicio FROM servicios WHERE activo_serv = TRUE ORDER BY nombre_servicio";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function agregarServicio($nombre) {
        $query = "INSERT INTO servicios (nombre_servicio) VALUES (?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$nombre]);
    }

    public function eliminarServicio($id) {
        $query = "DELETE FROM servicios WHERE id_servicios = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$id]);
    }
}
