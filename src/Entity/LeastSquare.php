<?php

namespace Bookreev\Approximation\Entity;

/**
 * Approximation y = a + bx
 */
class LeastSquare
{
    private array $result;
    private float $a;
    private float $b;

    public function __construct(array $result, float $a, float $b)
    {
        $this->result = $result;
        $this->a = $a;
        $this->b = $b;
    }

    public function getResult(): array
    {
        return $this->result;
    }

    public function getA(): float
    {
        return $this->a;
    }

    public function getB(): float
    {
        return $this->b;
    }
}