<?php
class Libros {
    public $titulo;
    public $autor;
    public $estado = "disponible";

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function donar() {
        $this->estado = "donado";
    }

    public function mostrarInformacion() {
        echo "\n {$this->titulo} \n {$this->autor} \n {$this->estado} \n";
    }
    
   
}
?>