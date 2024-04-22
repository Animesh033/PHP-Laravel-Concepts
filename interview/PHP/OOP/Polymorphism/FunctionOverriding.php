<?php

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
