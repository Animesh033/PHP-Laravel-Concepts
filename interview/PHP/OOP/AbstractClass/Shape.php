<?php

namespace Interview\PHP\OOP\AbstractClass;

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


/*
$php artisan tinker

> $shape = new Interview\PHP\OOP\AbstractClass\Shape();

   Error  Cannot instantiate abstract class Interview\PHP\OOP\AbstractClass\Shape.

   Note: We can not instantiate abstract class.
*/
