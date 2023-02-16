<?php

namespace Bookreev\Approximation\Entity;

/**
 * Approximation y = a + bx
 */
class LeastSquare
{
    private array $x;
    private array $y;
    private float $a;
    private float $b;

    public function __construct(array $x, array $y, float $a, float $b)
    {
        $this->x = $x;
        $this->y = $y;
        $this->a = $a;
        $this->b = $b;
    }

    public function getX(): array
    {
        return $this->x;
    }

    public function getY(): array
    {
        return $this->y;
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