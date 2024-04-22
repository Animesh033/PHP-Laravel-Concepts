<?php

namespace Interview\PHP\OOP\AbstractClass;

use Interview\PHP\OOP\AbstractClass\Shape;

class Rectangle extends Shape
{
    private $length;
    private $width;

    public function __construct($length, $width)
    {
        parent::__construct();

        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea()
    {
        return $this->length * $this->width;
    }
}
