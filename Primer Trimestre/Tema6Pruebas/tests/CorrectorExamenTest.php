<?php
// Se prueban todas las funciones del corrector de exámenes.
namespace Liedl\Tema6Pruebas\Tests;

use PHPUnit\Framework\TestCase;
use Liedl\Tema6Pruebas\Examen;
use Liedl\Tema6Pruebas\PreguntaTest;
use Liedl\Tema6Pruebas\PreguntaAbierta;
use Liedl\Tema6Pruebas\CorrectorExamen;

class CorrectorExamenTest extends TestCase
{
    // Se prueba la corrección completa de un examen.
    public function testCorreccionExamenCompleto()
    {
        // Se crea un examen nuevo.
        $examen = new Examen();
        
        // Se añade pregunta 1 de test.
        $examen->agregarPregunta(new PreguntaTest(
            "Q1", 
            "¿Cuál es la capital de Japon?", 
            2.0, 
            4, 
            2,  // Se marca la opción C como correcta.
            0.25 // Se quita 0.5 puntos si se falla.
        ));
        
        // Se añade pregunta 2 de test.
        $examen->agregarPregunta(new PreguntaTest(
            "Q2", 
            "¿100 - 43?", 
            3.0, 
            4, 
            0,  // Se marca la opción A como correcta.
            0.33 // Se quita 0.99 puntos si se falla.
        ));
        
        // Se añade pregunta 3 abierta.
        $examen->agregarPregunta(new PreguntaAbierta(
            "Q3", 
            "Explique conceptos POO", 
            5.0, 
            ["polimorfismo", "herencia", "encapsulamiento", "interfaces"]
        ));

        // Se simulan las respuestas de un alumno.
        $respuestas = [
            "Q1" => 2, // Se acierta la primera pregunta.
            "Q2" => 1, // Se falla la segunda pregunta.
            "Q3" => "La programación orientada a objetos incluye herencia, polimorfismo y encapsulamiento"
            // Se usan 3 de las 4 palabras clave.
        ];

        $corrector = new CorrectorExamen();
        $resultado = $corrector->corregir($examen, $respuestas);

        // Se verifican los resultados.
        $this->assertEquals(10.0, $resultado->puntosMaximos);
        
        // Se comprueba el cálculo de puntos:
        // Q1: +2.0, Q2: -0.99, Q3: (3/4)*5 = 3.75 → Total: 2.0 - 0.99 + 3.75 = 4.76
        $this->assertEquals(4.76, $resultado->puntosObtenidos);
        $this->assertEquals(4.76, $resultado->notaSobre10);
        $this->assertEquals("Suspenso", $corrector->obtenerCalificacionCualitativa($resultado->notaSobre10));
    }

    // Se prueba el funcionamiento del redondeo.
    public function testRedondeo()
    {
        $corrector = new CorrectorExamen();
        
        // Se verifica que redondee correctamente.
        $this->assertEquals(4.76, $corrector->redondear(4.756, 2));
        $this->assertEquals(4.75, $corrector->redondear(4.754, 2));
    }
}
?>