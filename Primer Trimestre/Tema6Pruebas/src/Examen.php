<?php 
// Esto es un examen completo con varias preguntas
namespace Liedl\Tema6Pruebas;

class Examen
{
    public $preguntas = [];// Aquí se lleva todas las preguntas

    // Se añade una pregunta al examen.
    public function agregarPregunta(Pregunta $pregunta)
    {
        $this->preguntas[$pregunta->id] = $pregunta;
    }

    // Se busca una pregunta por su número.
    public function obtenerPregunta($id)
    {
        return $this->preguntas[$id] ?? null;
    }

    // Se calcula cuánto vale todo el examen.
    public function obtenerPuntosMaximos()
    {
        // Se suma lo que vale cada pregunta.
        $total = 0;
        foreach ($this->preguntas as $pregunta) {
            $total += $pregunta->peso;
        }
        return $total;
    }
}
?>