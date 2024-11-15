<!DOCTYPE html>
<html>
<head>
    <title>Lista de Citas</title>
</head>
<body>
    <h1>Lista de Citas</h1>
    <a href="/CITAS/index.php?url=citas/crear">Agregar Cita</a><br>
    <a href="/CITAS/index.php?url=admin/horas">Listado de horas</a><br>
    <a href="/CITAS/index.php?url=admin/servicios">Listado de servicios</a>
    <table>
    <tr>
        <th>Correo</th>
        <th>Cliente</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Servicio</th>
    </tr>
    <?php foreach ($citas as $cita): ?>
        <tr>
            <td><?php echo $cita['cita_correo']; ?></td>
            <td><?php echo $cita['cita_nomcliente']; ?></td>
            <td><?php echo $cita['cita_fec']; ?></td>
            <td><?php echo $cita['cita_hora']; ?></td>
            <td><?php echo $cita['cita_servicio']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
