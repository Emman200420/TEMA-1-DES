<?php 
namespace Liedl\Tema6Pruebas;
class PreguntaTest extends Pregunta
{
    public $numOpciones;
    public $indiceCorrecta;
    public $penalizacion;

    public function __construct($id, $enunciado, $peso, $numOpciones, $indiceCorrecta, $penalizacion)
    {
        parent::__construct($id, $enunciado, $peso);
        $this->numOpciones = $numOpciones;
        $this->indiceCorrecta = $indiceCorrecta;
        $this->penalizacion = $penalizacion;
    }

    public function calcularPuntuacion($respuestaAlumno)
    {
        if ($respuestaAlumno === $this->indiceCorrecta) {
            return $this->peso;
        } else {
            return -($this->penalizacion * $this->peso);
        }
    }
}
?>