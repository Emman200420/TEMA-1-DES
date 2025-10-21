<?php

//Clase:
class Cochex{
    public $marca;
     public $color;

     //Constructor
     public function __construct($color, $marca){
        $this -> color = $color;
        $this -> marca = $marca;
     }

      public function arrancar(){
        echo"estoy arrancado";
      }
}
$miCoche = new Cochex("rojo" , "Tesla");
/*
$miCoche -> marca = "Tesla";
$miCoche -> color = "Rojo";
*/
echo $miCoche -> marca . "\n";
echo $miCoche -> color . "\n";
echo  $miCoche -> arrancar(). "\n" ;

?>