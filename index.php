<?php
require_once 'controllers/CitaController.php';
require_once 'controllers/AdminController.php';

$url = $_GET['url'] ?? ''; 
$controller = new CitaController();
$adminController = new AdminController();

if ($url == '' || $url == 'citas') {
    $controller->index();
} elseif ($url == 'citas/crear') {
    $controller->crear();
} elseif ($url == 'admin/horas') {
    $adminController->mostrarHoras();
} elseif ($url == 'admin/agregarHora') {
    $adminController->agregarHora();
} elseif ($url == 'admin/eliminarHora') {
    $adminController->eliminarHora();
} elseif ($url == 'admin/servicios') {
    $adminController->mostrarServicios();
} elseif ($url == 'admin/agregarServicio') {
    $adminController->agregarServicio();
} elseif ($url == 'admin/eliminarServicio') {
    $adminController->eliminarServicio();
} else {
    echo "Página no encontrada";
}

?>

