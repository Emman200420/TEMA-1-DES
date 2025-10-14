<?php
$Array = [
    "Ana" => [ "Matematicas" => 8 , "Lengua" => 7 , "Historia" => 4],
    "Luis" => [ "Matematicas" => 6 , "Lengua" => 7 , "Historia" => 5],
    "Marta" => [ "Matematicas" => 4 , "Lengua" => 2 , "Historia" => 5],
    "Pepito" => [ "Matematicas" => 4 , "Lengua" => 7 , "Historia" => 5],
];


function calcularNotaMedia($Array , $nombre){


    $totalnotas = 0;
    $materias = 0;


    foreach($Array[$nombre]  as $asignaturas => $notas){


        $totalnotas += $notas;
        $materias++ ;
        $rounded = $totalnotas / $materias;


    }
    return  round($rounded);
}


function NotaMaxima($Array , $nombre){
    return max($Array[$nombre]);
}


function estaAprobado($Array, $nombre){
    $notas = $Array[$nombre];
   
    foreach ($notas as $nota) {
        if ($nota < 5) {
            return false;
        }
    }
    return true;
}



foreach($Array as $nombre => $notas){
    $medias = calcularNotaMedia($Array, $nombre);
    $maxima = NotaMaxima($Array , $nombre);
    $aprobado = estaAprobado($Array, $nombre);


    echo"Alumno :   $nombre\n";
    echo"Nota media : $medias\n";
    echo"Nota maxima : $maxima\n";
    echo"¿Ha aprobado todas las asignaturas?: " . ($aprobado ? "SÍ" : "NO") . "\n";
    echo"=======================================\n";
 
}

?>

    

?>