<?php

$filename = "temperaturas.txt";
$temperaturas = [ "Lunes" => 14,"Martes" => 17,"Miercoles" => 18,"Jueves" => 20, "Viernes" => 25, "Sabado" => 23, "Domingo" => 16];

function mediaTemperatura($temperaturas){
    
    $sumadetemperatura = array_sum($temperaturas);
    $mediatemperatura = $sumadetemperatura / count($temperaturas);
         
    return $mediatemperatura;
    
} 

function temperaturaMinima($temperaturas){
    $tempminimo = min($temperaturas);
    $diasMinimos = [];
    
    foreach($temperaturas as $diasdesemana => $temperatura){
        if ($temperatura == $tempminimo) {
            $diasMinimos[] = $diasdesemana;
        }
    }
    
    return implode(", ", $diasMinimos) . " " . $tempminimo ;
}

function temperaturaMaxima($temperaturas){
    
    
    $tempmaximo = max($temperaturas);
    $diasMaximos = [];
    
    foreach($temperaturas as $diasdesemana => $temperatura){
        if ($temperatura == $tempmaximo) {
            $diasMaximos[] = $diasdesemana;
        }
    }
    
    return implode(", ", $diasMaximos) . " " . $tempmaximo ;
}

function temperaturasMas20 ($temperaturas){
     $tempCalurosas = [];
   
    foreach($temperaturas as $diasdesemana => $temperatura ) {
        if ($temperatura > 20) {
            $tempCalurosas[] = $diasdesemana ." ". $temperatura . "°C";
        }
    }
   
    return $tempCalurosas;

}

$media =  mediaTemperatura($temperaturas);
$minima =  temperaturaMinima($temperaturas);
$maximo = temperaturaMaxima($temperaturas);
$mas20 = temperaturasMas20($temperaturas);

    $archivo = fopen($filename, "w+");

$contenido =


 "La temperatura media es: " . $media . "°C\n".
 "La temperatura minimo es: " . $minima . "°C\n".
 "La temperatura maximo es: " . $maximo . "°C\n".
 "La temperatura mas de 20°C son: "  . implode(", ", $mas20) . "\n";

 fwrite($archivo, $contenido);
 fclose($archivo);
?>