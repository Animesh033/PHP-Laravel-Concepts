<?php

namespace Interview\PHP\OOP\AbsClass;

use Interview\PHP\OOP\AbsClass\Shape;

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
