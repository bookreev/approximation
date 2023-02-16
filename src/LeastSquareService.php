<?php

namespace Bookreev\Approximation;

use Bookreev\Approximation\Entity\LeastSquare;

class LeastSquareService
{
    public function resolve(array $params): LeastSquare
    {
        $xData = array_keys($params);
        $yData = array_values($params);
        $sumXY = $sumX = $sumY = $sumX2 = 0;
        $n = count($params);
        for ($i = 0; $i < $n; $i++) {
            $sumXY += $xData[$i] * $yData[$i];
            $sumX += $xData[$i];
            $sumY += $yData[$i];
            $sumX2 += pow($xData[$i], 2);
        }

        $a = ($n * $sumXY - $sumX * $sumY) / ($n * $sumX2 - pow($sumX, 2));
        $b = ($sumY - $a * $sumX) / $n;

        $result = [];
        foreach ($xData as $x){
            $result[$x] = $a * $x + $b;
        }

        return new LeastSquare($result, $a, $b);
    }
}