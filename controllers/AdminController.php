<?php
require_once 'models/Hora.php';
require_once 'models/Servicio.php';

class AdminController {
    private $horaModel;
    private $servicioModel;

    public function __construct() {
        $this->horaModel = new Hora();
        $this->servicioModel = new Servicio();
    }

    public function mostrarHoras() {
        $horas = $this->horaModel->obtenerHoras(); 
        include 'views/admin/horas.php'; 
    }

    public function agregarHora() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $hora = $_POST['hora'];
            $this->horaModel->agregarHora($hora);
            header("Location: /CITAS/index.php?url=admin/horas");
        }
    }

    public function eliminarHora() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->horaModel->eliminarHora($id);
            header("Location: /CITAS/index.php?url=admin/horas");
        }
    }

    public function mostrarServicios() {
        $servicios = $this->servicioModel->obtenerServicios();
        include 'views/admin/servicios.php';
    }

    public function agregarServicio() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['nombre_servicio'];
            $this->servicioModel->agregarServicio($nombre);
            header("Location: /CITAS/index.php?url=admin/servicios");
        }
    }

    public function eliminarServicio() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->servicioModel->eliminarServicio($id);
            header("Location: /CITAS/index.php?url=admin/servicios");
        }
    }
    
}
