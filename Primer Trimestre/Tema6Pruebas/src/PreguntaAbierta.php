<?php 
namespace Liedl\Tema6Pruebas;

/*
Vamos a hacer un extension nuestro programa(Pregunta.php) a Clase PreguntaAbierta y
esta clase para preguntas de desarollo.
*/
class PreguntaAbierta extends Pregunta
{
    public $palabrasClave = [];// Las palabras que le busca a nuestro respuesta.

    // Constructor a nuestros variables de preguntas de desarollo.
    public function __construct($id, $enunciado, $peso, $palabrasClave = [])
    {
        parent::__construct($id, $enunciado, $peso);
        $this->palabrasClave = $palabrasClave;
    }
    // En esta funcion, cuantas palabra clave que has puesto de tu respuesta.
    public function calcularPuntuacion($respuestaAlumno)
    {
        //Si esta vacio o no hay palabras claves da cero.
        if (empty($this->palabrasClave)) {
            return 0;
        }

        $matches = 0;// Cuántas palabras has acertado.
        $respuestaMinusculas = strtolower($respuestaAlumno);

        foreach ($this->palabrasClave as $palabra) {
            $palabraMinuscula = strtolower($palabra);
            if (strpos($respuestaMinusculas, $palabraMinuscula) !== false) {
                $matches++;
            }
        }

        // Te da puntos a las palabras que has puesto bien.
        return ($matches / count($this->palabrasClave)) * $this->peso;
    }
}
?>