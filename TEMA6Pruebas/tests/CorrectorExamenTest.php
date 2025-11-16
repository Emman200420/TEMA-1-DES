<?php 
namespace Liedl\Tema6Pruebas\Tests;

use PHPUnit\Framework\TestCase;
use Liedl\Tema6Pruebas\Examen;
use Liedl\Tema6Pruebas\PreguntaTest;
use Liedl\Tema6Pruebas\PreguntaAbierta;
use Liedl\Tema6Pruebas\CorrectorExamen;

class CorrectorExamenTest extends TestCase
{
    public function testCorreccionExamenCompleto()
    {
        // Crear examen
        $examen = new Examen();
        
        // Q1 (Test)
        $examen->agregarPregunta(new PreguntaTest(
            "Q1", 
            "¿Cuál es la capital de Francia?", 
            2.0, 
            4, 
            2, 
            0.25
        ));
        
        // Q2 (Test)
        $examen->agregarPregunta(new PreguntaTest(
            "Q2", 
            "¿2+2?", 
            3.0, 
            4, 
            0, 
            0.33
        ));
        
        // Q3 (Abierta)
        $examen->agregarPregunta(new PreguntaAbierta(
            "Q3", 
            "Explique conceptos POO", 
            5.0, 
            ["polimorfismo", "herencia", "encapsulamiento", "interfaces"]
        ));

        // Respuestas del alumno
        $respuestas = [
            "Q1" => 2, // Correcta: +2.0
            "Q2" => 1, // Incorrecta: -0.99
            "Q3" => "La programación orientada a objetos incluye herencia, polimorfismo y encapsulamiento" // 3/4 palabras
        ];

        $corrector = new CorrectorExamen();
        $resultado = $corrector->corregir($examen, $respuestas);

        // Verificaciones
        $this->assertEquals(10.0, $resultado->puntosMaximos);
        
        // Q1: +2.0, Q2: -0.99, Q3: (3/4)*5 = 3.75 → Total: 2.0 - 0.99 + 3.75 = 4.76
        $this->assertEquals(4.76, $resultado->puntosObtenidos);
        $this->assertEquals(4.76, $resultado->notaSobre10);
        $this->assertEquals("Suspenso",
         $corrector->obtenerCalificacionCualitativa($resultado->notaSobre10));
    }

    public function testRedondeo()
    {
        $corrector = new CorrectorExamen();
        
        $this->assertEquals(4.76, $corrector->redondear(4.756, 2));
        $this->assertEquals(4.75, $corrector->redondear(4.754, 2));
    }
}
?>