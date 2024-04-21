<?php

namespace Interview\PHP\OOP\Inheritance\Single;

use Interview\PHP\OOP\Inheritance\Single\Parent_1;

class Child_1 extends Parent_1
{
    function setVal($set_this)
    {
        $this->fist_name = $set_this;
    }
    function getVal()
    {
        echo $this->fist_name;
    }
}
