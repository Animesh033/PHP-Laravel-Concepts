<?php

namespace Interview\PHP\OOP\AbsClass;

// Abstract class representing a shape
abstract class Shape
{

    public function __construct()
    {
        $this->getClassName();
    }
    // Abstract method for calculating the area
    abstract public function calculateArea();

    public function getClassName()
    {
        echo 'Class Name: ' . get_called_class() . PHP_EOL;;
    }
}
