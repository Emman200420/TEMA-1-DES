<?php

class Examen{
    public $nombre;
    public $fecha;
    public $Npreguntas;
    public $nombreAsignatura; // Corregido typo
    public $nota = 0;

    public function __construct($nombre, $fecha, $Npreguntas, $nombreAsignatura){
        $this->nombre = $nombre;
        $this->Npreguntas = $Npreguntas;
        $this->fecha = $fecha; // Sin espacio
        $this->nombreAsignatura = $nombreAsignatura;
    }

    public function crearNota(){
        $this->nota = rand(0, 10);
    }

    public function crearActa(){
        $acta = "$this->nombre ha sacado un $this->nota en $this->nombreAsignatura";
        $id = fopen("Examen.txt", "w+");
        if($id){
            fwrite($id, $acta);
            fclose($id);
        }
    }
}

class Examenfinal extends Examen {

    public function __construct($nombre, $fecha, $Npreguntas, $nombreAsignatura){
        parent::__construct($nombre, $fecha, $Npreguntas, $nombreAsignatura);
    }

    public function crearActa(){
        parent::crearActa();
        
        $NuevaLinea = ($this->nota >= 5) ? " Aprobado" : " Suspenso";

        $id = fopen("Examen.txt", "a"); 
        if($id){
            fwrite($id, $NuevaLinea);
            fclose($id);
        }
    }
}

?>