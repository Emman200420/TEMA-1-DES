<?php

$filename = "temperaturas.txt";
$temperaturas = [ 14, 17, 18, 20, 25, 23, 16];

function mediaTemperatura($temperaturas){
    
    $sumadetemperatura = array_sum($temperaturas);
    $mediatemperatura = $sumadetemperatura / count($temperaturas);
         
    return $mediatemperatura;
    
} 

function temperaturaMinima($temperaturas){
   return min($temperaturas);
}

function temperaturaMaxima($temperaturas){
    return max($temperaturas);
}

function temperaturasMas20 ($temperaturas){
     $tempCalurosas = [];
   
    foreach($temperaturas as $temperatura) {
        if ($temperatura > 20) {
            $tempCalurosas[] = $temperatura . "°C";
        }
    }
   
    return $tempCalurosas;

}

$media =  mediaTemperatura($temperaturas);
$minima =  temperaturaMinima($temperaturas);
$maximo = temperaturaMaxima($temperaturas);
$mas20 = temperaturasMas20($temperaturas);

    $archivo = fopen($filename, "w");

$contenido =


 "La temperatura media es: " . $media . "°C\n".
 "La temperatura minimo es: " . $minima . "°C\n".
 "La temperatura maximo es: " . $maximo . "°C\n".
 "La temperatura mas de 20°C son: "  . implode(", ", $mas20) . "\n";

 fwrite($archivo, $contenido);
 fclose($archivo);
?>