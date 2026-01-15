<?php
namespace Liedl\Tema6Pruebas;

// Este clase se corrige tus examenes.
class CorrectorExamen
{

    // Se corrige un examen completo.
    public function corregir(Examen $examen, $respuestas)
    {
        $puntosObtenidos = 0;
        $detalle = [];

        // Se revisa cada respuesta del estudiante.
        foreach ($respuestas as $idPregunta => $respuestaAlumno) {
            $pregunta = $examen->obtenerPregunta($idPregunta);
            
            // Si la pregunta no existe, le ignora.
            if ($pregunta === null) {
                continue;
            }

              // Se pide a la pregunta que calcule los puntos.
            $puntuacionPregunta = $pregunta->calcularPuntuacion($respuestaAlumno);
            $puntosObtenidos += $puntuacionPregunta;
            $detalle[$idPregunta] = $puntuacionPregunta;
        }

        // No se permiten puntos negativos
        if ($puntosObtenidos < 0) {
            $puntosObtenidos = 0;
        }

         // Se calcula la nota final
        $puntosMaximos = $examen->obtenerPuntosMaximos();
        $notaSobre10 = $this->calcularNotaSobre10($puntosObtenidos, $puntosMaximos);

        return new ResultadoCorreccion($puntosObtenidos, $puntosMaximos,
         $notaSobre10, $detalle);
    }

    // Se convierte a nota sobre 10.
    public function calcularNotaSobre10($puntos, $max)
    {
        if ($max == 0) return 0;
        $nota = ($puntos / $max) * 10;
        return $this->redondear($nota, 2);
    }

    // Se obtiene la calificación en palabras.
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

    // Se redondean los números
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