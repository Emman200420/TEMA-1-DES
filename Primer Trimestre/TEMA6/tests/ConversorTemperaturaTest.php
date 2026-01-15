<?php
namespace Liedl\TEMA6\Tests;

use PHPUnit\Framework\TestCase;  
use Liedl\TEMA6\ConversorTemperatura;

final class ConversorTemperaturaTest extends TestCase
{
    private ConversorTemperatura $conv;

    protected function setUp(): void
    {
        $this->conv = new ConversorTemperatura();
    }

    // --- Comparaciones de igualdad ---
    public function testCelsiusAFahrenheitIgual(): void
    {
        $this->assertSame(32.0, $this->conv->celciusAFahrenheight(0.0));
    }

    public function testCelsiusAFahrenheitNoIgual(): void
    {
        $this->assertNotSame(0.0, $this->conv->celciusAFahrenheight(0.0));
    }

    public function testCelsiusAFahrenheitEquals(): void
    {
        $this->assertEquals(32.0, $this->conv->celciusAFahrenheight(0.0));
    }

    public function testCelsiusAFahrenheitNotEquals(): void
    {
        $this->assertNotEquals(0.0, $this->conv->celciusAFahrenheight(0.0));
    }

    // --- Booleanos ---
    public function testCelsiusAFahrenheitVerdadero(): void
    {
        $this->assertTrue($this->conv->celciusAFahrenheight(0.0) === 32.0);
    }

    public function testCelsiusAFahrenheitFalso(): void
    {
        $this->assertFalse($this->conv->celciusAFahrenheight(0.0) === 0.0);
    }

    // --- Null y vacío ---
    public function testValorEsNull(): void
    {
        $valor = null;
        $this->assertNull($valor);
    }

    public function testValorNoEsNull(): void
    {
        $valor = $this->conv->celciusAFahrenheight(0.0);
        $this->assertNotNull($valor);
    }

    public function testValorVacio(): void
    {
        $valor = [];
        $this->assertEmpty($valor); 
    }

    public function testValorNoVacio(): void
    {
        $valor = $this->conv->celciusAFahrenheight(0.0);
        $this->assertNotEmpty($valor); 
    }
}
