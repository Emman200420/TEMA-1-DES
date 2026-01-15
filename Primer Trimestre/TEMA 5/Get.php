 <?php
    
    if (isset($_GET['nombre']) && !empty($_GET['nombre'])){
        $nombre = htmlspecialchars($_GET['nombre']);
        echo "<h2>Me llamo: $nombre</h2>";
    } else if (isset($_GET['nombre'])) {
        echo "<h2>El nombre está vacío</h2>";
    }

   
    if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        
        
        if (!empty($numero1) && !empty($numero2)) {
            $resultado = $numero1 + $numero2;
            echo "<script>alert('$numero1 + $numero2 = $resultado');</script>";
            echo "<h2>Suma realizada: $numero1 + $numero2 = $resultado</h2>";
        } else {
            echo "<script>alert('Por favor, ingresa ambos números');</script>";
            echo "<h2>Error: Faltan números por ingresar</h2>";
        }
    }
    ?>