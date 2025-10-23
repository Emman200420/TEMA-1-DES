<?php
class Biblioteca {
    public $nombre;
    public $libros = [];

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function agregarLibro($libro) {
        $this->libros[] = $libro;
    }

    public function mostrarLibrosDisponibles() {
        echo "\n--- Libros Disponibles en {$this->nombre} ---\n \n";
        $disponibles = false;
        foreach($this->libros as $libro) {
            if($libro->estado == "disponible") {
                echo "\n - {$libro->titulo} : {$libro->estado}";
                $disponibles = true;
            }
        }
        if (!$disponibles) {
            echo "\n No hay libros disponibles en este momento.";
        }
        echo "\n";
    }

    public function prestarLibro($nombre) {
        foreach($this->libros as $libro) {
            if($libro->titulo == $nombre) {
                $libro->estado = "prestado";
                echo "\n Libro '{$nombre}' ha sido prestado.";
                return true;
            }
        }
        echo "\n Libro '{$nombre}' no encontrado.";
        return false;
    }

    public function devolverLibro($nombre) {
        foreach($this->libros as $libro) {
            if($libro->titulo == $nombre) {
                $libro->estado = "disponible";
                echo "\n Libro '{$nombre}' ha sido devuelto.";
                return true;
            }
        }
        echo "\n Libro '{$nombre}' no encontrado.";
        return false;
    }
}
?>