<?php 

namespace Liedl\TEMA6;
class ConversorTemperatura {
    public function celciusAFahrenheight(float $c): float
    {
        return $c * 9/ 5 + 32;
    }

    public function fahernheightACelcius(float $f): float
    {
        return ($f -32 ) * 5 / 9;
    }
}
?>

