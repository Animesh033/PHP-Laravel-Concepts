<?php

namespace Interview\PHP\OOP\Inheritance\Multilevel;

class Child_1 extends Parent_1
{
    function setVal($set_this)
    {
        $this->fist_name = $set_this;
    }
    function getVal()
    {
        echo "Extended By Parent Class -" . $this->fist_name;
    }
}
