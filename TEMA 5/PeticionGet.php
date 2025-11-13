<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h2>Formulario Nombre</h2>
    <form action="Get.php" method="GET">
        <label>Nombre:</label>
        <input type="text" name="nombre">
        <button type="submit">Enviar Nombre</button>
    </form>

    <h2>Formulario Suma</h2>
    <form action="Get.php" method="GET">
        <input type="number" name="numero1" placeholder="Número 1">
        <input type="number" name="numero2" placeholder="Número 2">
        <button type="submit">Sumar Números</button>
    </form>
</body>
</html>