<?php
include 'db/connection.php';
$result = $connection->query("SELECT * FROM personas");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD php</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <h1>Lista de usuarios</h1>
    <a href="views/add.php" class="add-btn">Agregar usuarios</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Fecha de nacimiento</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['apellido']; ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['fecha_nacimiento'] ?></td>
                <td>
                    <a href="views/edit.php?id=<?php echo $row['id']; ?>" class="edit">Editar</a>

                </td>
                <td>
                    <a href="controllers/delete.php?id=<?php echo $row['id']; ?>"
                        onclick="return confirm ('¿Esta seguro?')" class="delete">Eliminar</a>
                </td>

            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>