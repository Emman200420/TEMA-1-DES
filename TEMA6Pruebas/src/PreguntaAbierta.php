<?php 
namespace Liedl\Tema6Pruebas;
class PreguntaAbierta extends Pregunta
{
    public $palabrasClave = [];

    public function __construct($id, $enunciado, $peso, $palabrasClave = [])
    {
        parent::__construct($id, $enunciado, $peso);
        $this->palabrasClave = $palabrasClave;
    }

    public function calcularPuntuacion($respuestaAlumno)
    {
        if (empty($this->palabrasClave)) {
            return 0;
        }

        $matches = 0;
        $respuestaMinusculas = strtolower($respuestaAlumno);

        foreach ($this->palabrasClave as $palabra) {
            $palabraMinuscula = strtolower($palabra);
            if (strpos($respuestaMinusculas, $palabraMinuscula) !== false) {
                $matches++;
            }
        }

        return ($matches / count($this->palabrasClave)) * $this->peso;
    }
}
?>