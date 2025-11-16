<?php 
namespace Liedl\Tema6Pruebas;

class Examen
{
    public $preguntas = [];

    public function agregarPregunta(Pregunta $pregunta)
    {
        $this->preguntas[$pregunta->id] = $pregunta;
    }

    public function obtenerPregunta($id)
    {
        return $this->preguntas[$id] ?? null;
    }

    public function obtenerPuntosMaximos()
    {
        $total = 0;
        foreach ($this->preguntas as $pregunta) {
            $total += $pregunta->peso;
        }
        return $total;
    }
}
?>