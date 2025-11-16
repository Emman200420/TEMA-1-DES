<?php 
namespace Liedl\Tema6Pruebas;
class Pregunta
{
    public $id;
    public $enunciado;
    public $peso;

    public function __construct($id, $enunciado, $peso)
    {
        $this->id = $id;
        $this->enunciado = $enunciado;
        $this->peso = $peso;
    }

    // Añadir el método calcularPuntuacion en la clase base
    public function calcularPuntuacion($respuestaAlumno)
    {
        return 0; // Por defecto retorna 0
    }
}
?>