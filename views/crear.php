<!DOCTYPE html>
<html>
<head>
    <title>Crear Cita</title>
</head>
<body>
    <h1>Crear Cita</h1>
    <a href="/CITAS/index.php?url=citas">Listado de Citas</a><br>
    <a href="/CITAS/index.php?url=admin/horas">Listado de horas</a><br>
    <a href="/CITAS/index.php?url=admin/servicios">Listado de servicios</a>
    <form action="/CITAS/index.php?url=citas/crear" method="POST">
        <label>Correo: </label><input type="email" name="cita_correo" required><br>
        <label>Nombre Completo: </label><input type="text" name="cita_nomcliente" required><br>
        <label>Fecha de Cita: </label><input type="date" name="cita_fec" required><br>
        <label>Horas Disponibles:</label>
        <select name="cita_hora" required>
            <?php
            require_once __DIR__ . '/../models/Hora.php';
            $horaModel = new Hora();
            $horas = $horaModel->obtenerHoras();

            if (empty($horas)) {
                echo "<option>No hay horas disponibles</option>";
            } else {
                foreach ($horas as $hora) {
                    echo "<option value='{$hora['hora']}'>{$hora['hora']}</option>";
                }
            }
            ?>
        </select><br>
        <label>Servicio:</label>
        <select name="cita_servicio" required>
            <?php
            require_once 'models/Servicio.php';
            $servicioModel = new Servicio();
            $servicios = $servicioModel->obtenerServicios();

            if (empty($servicios)) {
                echo "<option>No hay servicios disponibles</option>";
            } else {
                foreach ($servicios as $servicio) {
                    echo "<option value='{$servicio['nombre_servicio']}'>{$servicio['nombre_servicio']}</option>";
                }
            }
            ?>
        </select><br>

        <button type="submit">Guardar Cita</button>
    </form>
</body>
</html>
