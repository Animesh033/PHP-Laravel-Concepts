<?php

namespace Interview\PHP\OOP\Inheritance\Multilevel;

class Child_2 extends Child_1
{
    function setVal($set_this)
    {
        $this->fist_name = $set_this;
    }
    function getVal()
    {
        echo "Extended By child 1  - " . $this->fist_name;
    }
}
