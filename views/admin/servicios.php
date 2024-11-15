<!DOCTYPE html>
<html>
<head>
    <title>Gestionar Servicios</title>
</head>
<body>
    <h1>Gestionar Servicios</h1>
    <a href="/CITAS/index.php?url=citas">Listado de Citas</a><br>
    <a href="/CITAS/index.php?url=admin/horas">Listado de horas</a><br>
    <a href="/CITAS/index.php?url=citas/crear">Nueva Cita</a>
    <form action="/CITAS/index.php?url=admin/agregarServicio" method="POST">
        <label>Nuevo Servicio:</label>
        <input type="text" name="nombre_servicio" required>
        <button type="submit">Agregar</button>
    </form>

    <h2>Servicios Disponibles</h2>
    <?php if (!empty($servicios)): ?>
        <table>
            <tr>
                <th>Servicio</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($servicios as $servicio): ?>
                <tr>
                    <td><?php echo htmlspecialchars($servicio['nombre_servicio']); ?></td>
                    <td>
                        <a href="/CITAS/index.php?url=admin/eliminarServicio&id=<?php echo htmlspecialchars($servicio['id_servicios']); ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No hay servicios disponibles.</p>
    <?php endif; ?>
</body>
</html>
