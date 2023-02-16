<?php

class LeastSquareServiceTestCase extends \PHPUnit\Framework\TestCase
{

    /**
     * @return void
     * @dataProvider getDataProvider
     */
    public function testResolve($x, $y, $a, $b): void
    {
        $solution = (new \Bookreev\Approximation\LeastSquareService())->resolve($x, $y);
        $this->assertInstanceOf(\Bookreev\Approximation\Entity\LeastSquare::class, $solution, 'InstanceOf LeastSquare');
        $this->assertEquals($a, $solution->getA());
        $this->assertEquals($b, $solution->getB());
        $this->assertEqualsCanonicalizing($x, $solution->getX());
        $this->assertEqualsCanonicalizing($y, $solution->getY());
    }

    public function getDataProvider()
    {
        return [
            [
                'x' => [0.0, 1.0, 2.0, 5.0, 7.0],
                'y' => [2.0, 3.0, 4.0, 7.0, 9.0],
                'a' => 1.0,
                'b' => 2.0,
            ]
        ];
    }
}