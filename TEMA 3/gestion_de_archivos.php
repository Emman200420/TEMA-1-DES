<?php

$num = 7;
$filename = "Matriz.txt";

function matriz($filename, $num) {
    
    $archivo = fopen($filename, "w");

    $contenido = ""; 

    for ($i = 0; $i < $num; $i++) {
        for ($j = 0; $j < $num; $j++) {
            $contenido .= rand(0, 1) . " "; 
        }
        $contenido .= "\n"; 
    }

    fwrite($archivo, $contenido);
    fclose($archivo);

   
}

matriz($filename, $num);

?>
