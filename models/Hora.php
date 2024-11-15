<?php
require_once 'Conexion.php';

class Hora {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function obtenerHoras() {
        $query = "SELECT id_hora, hora FROM horas WHERE activo = TRUE ORDER BY hora";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public function agregarHora($hora) {
        $query = "INSERT INTO horas (hora) VALUES (?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$hora]);
    }

    public function eliminarHora($id_hora) {
        $query = "DELETE FROM horas WHERE id_hora = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$id_hora]);
    }
}
