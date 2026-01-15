<?php
namespace Liedl\Tema6Pruebas;

// Aquí se guarda lo que has sacado en el examen.
class ResultadoCorreccion
{
    public $puntosObtenidos; 
    public $puntosMaximos;
    public $notaSobre10;
    public $detalle = [];

    // Aqui donde ha guardado todos tus resultados.
    public function __construct($puntosObtenidos, $puntosMaximos, $notaSobre10, $detalle = [])
    {
        $this->puntosObtenidos = $puntosObtenidos;
        $this->puntosMaximos = $puntosMaximos;
        $this->notaSobre10 = $notaSobre10;
        $this->detalle = $detalle;
    }
}
?>