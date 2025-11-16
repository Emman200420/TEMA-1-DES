<?php
namespace Liedl\Tema6Pruebas;

class ResultadoCorreccion
{
    public $puntosObtenidos;
    public $puntosMaximos;
    public $notaSobre10;
    public $detalle = [];

    public function __construct($puntosObtenidos, $puntosMaximos, $notaSobre10, $detalle = [])
    {
        $this->puntosObtenidos = $puntosObtenidos;
        $this->puntosMaximos = $puntosMaximos;
        $this->notaSobre10 = $notaSobre10;
        $this->detalle = $detalle;
    }
}
?>