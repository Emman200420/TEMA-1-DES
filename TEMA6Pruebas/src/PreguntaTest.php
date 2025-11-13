<?php
namespace Liedl\TEMA6Pruebas;

class PreguntaTest{
    public $id;
    public $enunciado;
    public $peso;
    public $numOpciones;
    public $indiceCorrecta;
    public $penalizacion;

     public function __construct($id, $enunciado, $peso, $numOpciones, $indiceCorrecta, $penalizacion) {
        $this->id = $id;
        $this->enunciado = $enunciado;
        $this->peso = $peso;
        $this->numOpciones = $numOpciones;
        $this->indiceCorrecta = $indiceCorrecta;
        $this->penalizacion = $penalizacion;
    }
    
    public function preguntaTest(){
        if($respuestaAlumno === $this ->indiceCorrecta){
            return $this -> peso;
        }else {
            return ($this->penalizacion * $this->peso);
        }
    }

}
       
?>