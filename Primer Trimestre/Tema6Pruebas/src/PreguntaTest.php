<?php 
namespace Liedl\Tema6Pruebas;

/*
Vamos a hacer un extension nuestro programa(Pregunta.php) a Clase Peguntatest y
esta clase para el tipo test.
*/
class PreguntaTest extends Pregunta
{

    /*
      $numOpciones es las opciones
      que hay en tipo test, normalmente es 4 opciones.

      $indiceCorrrecta la variable que cual es la correcta.

      $penalizacion es a variable cuando has sacado mal te quitan.

    */
    public $numOpciones;
    public $indiceCorrecta;
    public $penalizacion;

    // Constructor a nuestros variables de tipo test
    public function __construct($id, $enunciado, $peso, $numOpciones, $indiceCorrecta, $penalizacion)
    {
        parent::__construct($id, $enunciado, $peso);
        $this->numOpciones = $numOpciones;
        $this->indiceCorrecta = $indiceCorrecta;
        $this->penalizacion = $penalizacion;
    }
    
    /* Es la funcion que calcula tu puntuacion
    Si esta correcto te da puntos, 
    si no van penalizar tus puntos incorrectas 
    */
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