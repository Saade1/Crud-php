<?php
include '../db/connection.php';

$id = $_GET['id'];
$result = $connection->query("SELECT * FROM personas WHERE id=$id");
$user = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>
    <link rel="stylesheet" href="../css/forms.css">

</head>

<body>

    <h1>Editar usuarios</h1>
    <form action="../controllers/update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <input type="text" name="name" value="<?php echo $user['nombre']; ?>">
        <input type="text" name="last_Name" value="<?php echo $user['apellido']; ?>">
        <input type="text" name="email" value="<?php echo $user['email']; ?>">
        <input type="date" name="date_Birth" value="<?php echo $user['fecha_nacimiento']; ?>">
        <button type="submit">Actualizar</button>
        <a href="../index.php" class="cancel-btn">Cancelar</a>
    </form>
</body>

</html>