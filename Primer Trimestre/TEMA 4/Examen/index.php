<?php
require_once "Examen.php";


$examen1 = new Examenfinal("Emman", "22-10-2025", 10, "PHP");

echo $examen1->nombre . "\n\n";
$examen1->crearNota();
$examen1->crearActa(); 

?>