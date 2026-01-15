<?php
require_once "Coche.php";
$cocheEmman = new Coche("Toyota", "XVXX9M", "Rojo", 89, 0);
echo $cocheEmman->mostrarInformacion();
echo "\n";
$cocheEmman->reduirVelocidad();
echo "\n";
$cocheEmman->comprobarMarcha();
echo "\n";
echo $cocheEmman->mostrarInformacion();
?>