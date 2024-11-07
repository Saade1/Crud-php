<?php include '../db/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar usuarios</title>
    <link rel="stylesheet" href="../css/forms.css">

</head>

<body>
    <h1>Agregar usuarios</h1>
    <form action="../controllers/create.php" method="post">
        <input type="text" name="name" placeholder="Nombre/s" required>
        <input type="text" name="last_Name" placeholder="Apellidos" required>
        <input type="email" name="email" placeholder="email" required>
        <input type="date" name="date_Birth" required>
        <button type="submit">Guardar</button>
        <a href="../index.php" class="cancel-btn">cancelar</a>
    </form>
</body>

</html>