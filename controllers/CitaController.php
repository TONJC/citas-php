<?php
require_once 'models/Cita.php';

class CitaController {
    private $model;

    public function __construct() {
        $this->model = new Cita();
    }

    public function index() {
        $citas = $this->model->obtenerCitas();
        include 'views/index.php';
    }

    public function crear() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cita_correo = $_POST['cita_correo'];
            $cita_nomcliente = $_POST['cita_nomcliente'];
            $cita_fec = $_POST['cita_fec'];
            $cita_hora = $_POST['cita_hora'];
            $cita_servicio = $_POST['cita_servicio'];

            $this->model->crearCita($cita_correo, $cita_nomcliente, $cita_fec, $cita_hora, $cita_servicio);
            header("Location: /CITAS/index.php");
            exit();
        } else {
            include 'views/crear.php';
        }
    }
    
}
