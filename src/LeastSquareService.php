<?php

namespace Bookreev\Approximation;

use Bookreev\Approximation\Entity\LeastSquare;

class LeastSquareService
{
    public function resolve(array $x, array $y): LeastSquare
    {
        $sumXY = $sumX = $sumY = $sumX2 = 0;
        $n = count($x);
        for ($i = 0; $i < $n; $i++) {
            $sumXY += $x[$i] * $y[$i];
            $sumX += $x[$i];
            $sumY += $y[$i];
            $sumX2 += pow($x[$i], 2);
        }

        $a = ($n * $sumXY - $sumX * $sumY) / ($n * $sumX2 - pow($sumX, 2));
        $b = ($sumY - $a * $sumX) / $n;

        $result = [];
        foreach ($x as $v){
            $result[$v] = $a * $v + $b;
        }

        return new LeastSquare($result, $a, $b);
    }
}