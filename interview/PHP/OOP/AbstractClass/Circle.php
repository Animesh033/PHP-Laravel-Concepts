<?php

namespace Interview\PHP\OOP\AbstractClass;

use Interview\PHP\OOP\AbstractClass\Shape;

class Circle extends Shape
{
    private $radius;

    public function __construct($radius)
    {
        parent::__construct();
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}
