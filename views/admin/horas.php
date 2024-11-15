<!DOCTYPE html>
<html>
<head>
    <title>Gestionar Horas</title>
</head>
<body>
    <h1>Gestionar Horas</h1>
    <a href="/CITAS/index.php?url=citas/crear">Crear Cita</a><br>
    <a href="/CITAS/index.php?url=citas">Listado de Citas</a><br>
    <a href="/CITAS/index.php?url=admin/servicios">Listado de servicios</a>
    <form action="/CITAS/index.php?url=admin/agregarHora" method="POST">
        <label>Nueva Hora:</label>
        <input type="time" name="hora" required>
        <button type="submit">Agregar</button>
    </form>

    <h2>Horas Disponibles</h2>
    <table>
        <tr>
            <th>Hora</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($horas as $hora): ?>
            <tr>
                <td><?php echo htmlspecialchars($hora['hora']); ?></td> 
                <td>
                    <?php if (isset($hora['id_hora'])): ?> 
                        <a href="/CITAS/index.php?url=admin/eliminarHora&id=<?php echo htmlspecialchars($hora['id_hora']); ?>">Eliminar</a>
                    <?php else: ?>
                        <span>Error: ID no definido</span>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
