<?php

namespace Interview\PHP\OOP\ClassAndObject;

class ClassAndObjectExample
{
    public $name;
    public $breed;

    public function __construct()
    {
    }

    public function bark()
    {
        echo "Woof! Woof!";
    }

    public function fetch()
    {
        echo "{$this->name} is fetching.";
    }
}

/*
// Creating objects from the Dog class
$dog1 = new ClassAndObjectExample();
$dog2 = new ClassAndObjectExample();

// Setting property values
$dog1->name = "Buddy";
$dog1->breed = "Labrador";

$dog2->name = "Max";
$dog2->breed = "Golden Retriever";

// Calling methods
$dog1->bark(); // Outputs: Woof! Woof!
$dog2->fetch(); // Outputs: Max is fetching.

*/
