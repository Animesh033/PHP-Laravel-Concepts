<?php

namespace Interview\PHP\OOP\AbsClass;

use Interview\PHP\OOP\AbsClass\Shape;

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
