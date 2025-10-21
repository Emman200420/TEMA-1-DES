<?php
class Coche{
    public $marca;
    public $modelo;
    public $color;
    public $velocidad = 0;
    public $marcha = null;

     public function __construct($marca, $modelo, $color, $velocidad, $marcha){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->velocidad = $velocidad;
        $this->marcha = $marcha;
     }

     public function aumentarVelocidad(){
        if($this->velocidad < 100){
            $this->velocidad += 10;
        }
     }

     public function reduirVelocidad(){
         if($this->velocidad > 5){
            $this->velocidad -= 5;
        }
     }

     public function comprobarMarcha(){
        if($this->velocidad >= 0 && $this->velocidad < 20){
           $this->marcha = 1;
        }
        else if ($this->velocidad >= 20 && $this->velocidad < 40){
            $this->marcha = 2;
        }
        else if ($this->velocidad >= 40 && $this->velocidad < 60){
            $this->marcha = 3;
        }
        else if ($this->velocidad >= 60 && $this->velocidad < 80){
            $this->marcha = 4;
        }
        else if ($this->velocidad >= 80 && $this->velocidad < 100){
            $this->marcha = 5;
        }
        else if ($this->velocidad >= 100){
            $this->marcha = 6;
        }
     }

     public function mostrarInformacion(){
        echo "Marca: " . $this->marca . "\n";
        echo "Modelo: " . $this->modelo . "\n";
        echo "Color: " . $this->color . "\n";
        echo "Velocidad: " . $this->velocidad . "\n";
        echo "Marcha: " . $this->marcha . "\n";
     }
}
?>