<?php
namespace Liedl\Tema6Pruebas;

class CorrectorExamen
{
    public function corregir(Examen $examen, $respuestas)
    {
        $puntosObtenidos = 0;
        $detalle = [];

        foreach ($respuestas as $idPregunta => $respuestaAlumno) {
            $pregunta = $examen->obtenerPregunta($idPregunta);
            
            if ($pregunta === null) {
                continue;
            }

            $puntuacionPregunta = $pregunta->calcularPuntuacion($respuestaAlumno);
            $puntosObtenidos += $puntuacionPregunta;
            $detalle[$idPregunta] = $puntuacionPregunta;
        }

        // El mínimo es 0
        if ($puntosObtenidos < 0) {
            $puntosObtenidos = 0;
        }

        $puntosMaximos = $examen->obtenerPuntosMaximos();
        $notaSobre10 = $this->calcularNotaSobre10($puntosObtenidos, $puntosMaximos);

        return new ResultadoCorreccion($puntosObtenidos, $puntosMaximos,
         $notaSobre10, $detalle);
    }

    public function calcularNotaSobre10($puntos, $max)
    {
        if ($max == 0) return 0;
        $nota = ($puntos / $max) * 10;
        return $this->redondear($nota, 2);
    }

    public function obtenerCalificacionCualitativa($nota)
    {
        if ($nota < 5) {
            return "Suspenso";
        } elseif ($nota < 7) {
            return "Aprobado";
        } elseif ($nota < 9) {
            return "Notable";
        } else {
            return "Sobresaliente";
        }
    }

    public function redondear($valor, $decimales = 2, $modo = 'half_up')
    {
        if ($modo === 'half_up') {
            return round($valor, $decimales);
        } elseif ($modo === 'down') {
            $multiplicador = pow(10, $decimales);
            return floor($valor * $multiplicador) / $multiplicador;
        } elseif ($modo === 'up') {
            $multiplicador = pow(10, $decimales);
            return ceil($valor * $multiplicador) / $multiplicador;
        }
        return round($valor, $decimales);
    }
}
?>