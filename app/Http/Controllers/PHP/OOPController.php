<?php

namespace App\Http\Controllers\PHP;

use Interview\PHP\OOP\AbsClass\Circle;
use Interview\PHP\OOP\AbsClass\Rectangle;
use Interview\PHP\OOP\ClassAndObject\ClassAndObjectExample;

class OOPController
{

    /*
        To check these functionality:
        1. Run php artisan tinker in terminal
        2. Create OOPController object:
            $oopController = new App\Http\Controllers\PHP\OOPController();
        3. Call the methods of OOPController:
            $oopController->ClassAndObjectExample();
            $oopController->AbsClassExample();

    */
    public function __construct()
    {
    }

    public function ClassAndObjectExample()
    {
        $classExample = new ClassAndObjectExample();

        echo $classExample->bark();
    }

    public function AbsClassExample()
    {
        $circle = new Circle(5);
        $rectangle = new Rectangle(4, 6);

        echo 'Circle Area: ' . $circle->calculateArea() . PHP_EOL;
        echo 'Rectangle Area: ' . $rectangle->calculateArea() . PHP_EOL;
    }
}
