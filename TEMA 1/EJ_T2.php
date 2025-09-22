<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Año Bisiesto</title>
</head>
<body>
    <h1>Año bisiesto</h1>
    
    <form action="EJ_T2.php" method="post">

        <input type="number" placeholder="Pon el año que deseas poner" name="año" required>
        <input type="submit" value="Enviar">
        
    </form>

    <?php
    if (isset($_POST["año"])) {

        $año = $_POST["año"];
        
        if (($año % 4 == 0 && $año % 100 != 0 ) || ( $año % 400 == 0  )) {

            echo "Es año bisiesto";
        }else {
            echo "No es año bisiesto";
        }
    }
    ?>

</body>
</html>
