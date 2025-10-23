<?php
require_once "Biblioteca.php";
require_once "Libros.php";

$miBiblioteca = new Biblioteca("Emman");
$miLibro1 = new Libros("Quijote", "Miguel Cervantes");
$miLibro2 = new Libros("Good thing", "Idol");
$miLibro3 = new Libros("This is for", "Mitosis");
$miLibro4 = new Libros("HOT", "Fearless");

echo "======================================== \n";
$miBiblioteca->agregarLibro($miLibro1);
$miBiblioteca->mostrarLibrosDisponibles();
$miLibro1->mostrarInformacion();

echo "\n======================================== \n";
$miBiblioteca->agregarLibro($miLibro2);
$miLibro2->donar(); 
$miBiblioteca->mostrarLibrosDisponibles();
$miLibro2->mostrarInformacion();

echo "\n======================================== \n";
$miBiblioteca->agregarLibro($miLibro3);
$miBiblioteca->prestarLibro("This is for");
$miBiblioteca->mostrarLibrosDisponibles();
$miLibro3->mostrarInformacion();

echo "\n======================================== \n";
$miBiblioteca->agregarLibro($miLibro4);
$miBiblioteca->prestarLibro("HOT");
$miBiblioteca->devolverLibro("HOT");
$miBiblioteca->mostrarLibrosDisponibles();
$miLibro4->mostrarInformacion();
?>