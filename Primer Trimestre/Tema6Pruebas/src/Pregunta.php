<?php 
namespace Liedl\Tema6Pruebas;
class Pregunta
{
    /*
     Las variables vamos a utilizar:
     $id es el numero de pregunta.
     $enunciado es el texto de la pregunta.
     $preso es la puntos de la pregunta.
       
    */
    public $id;
    public $enunciado;
    public $peso;

    public function __construct($id, $enunciado, $peso)
    {
        $this->id = $id;
        $this->enunciado = $enunciado;
        $this->peso = $peso;
    }

    /*
     Aqui se calcula cuantos puntos que han dado por tu respuesta.
     */
    public function calcularPuntuacion($respuestaAlumno)
    {
        return 0;
    }
}
?>