<?php
/*
Polymorphism is a fundamental concept in object-oriented programming (OOP) that allows objects of different classes to be treated as objects of a common base class. PHP supports polymorphism through method overloading and interfaces.

Method Overloading:

In PHP, method overloading is achieved by having multiple methods in a class with the same name but different parameters.
PHP doesn’t support native method overloading by changing the number or type of parameters, but you can use default parameter values or variable-length argument lists (func_num_args(), func_get_arg(), and func_get_args()) to achieve a similar effect.


This is wrong, can't do this way in PHP
class Calculator
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function add($a, $b, $c)
    {
        return $a + $b + $c;
    }
}

$calc = new Calculator();
echo $calc->add(2, 3);      // Outputs 5
echo $calc->add(2, 3, 5);   // Outputs 10

*/


// In PHP (Function Overloading)
class Resolve
{
    const Pi = 3.142;
    function __call($functionName, $arg)
    {

        if ($functionName == "area")
            switch (count($arg)) {

                case 0:
                    return 0;
                case 1:
                    return self::Pi * $arg[0];
                case 2:
                    return $arg[0] * $arg[1];
            }
    }
}
$circle = new Resolve();
echo "Area of circle: " . $circle->area(5) . "</br>";
$rect = new Resolve();
echo "Area of rectangle: " . $rect->area(5, 10);

/*
Function Overriding
===================

It is the same as other OOPs programming languages. In this function, both parent and child classes should have the same function name and number of arguments. It is used to replace the parent method in child class. The purpose of function overriding is to change the behavior of the parent class method. The two functions with the same name and the same parameter are called function overriding.

*/
class ParentClass
{

    function helloWorld()
    {

        echo "Parent";
    }
}

class ChildClass extends ParentClass
{

    function helloWorld()
    {

        echo "\nChild";
    }
}

$p = new ParentClass;

$c = new ChildClass;

$p->helloWorld();

$c->helloWorld();
