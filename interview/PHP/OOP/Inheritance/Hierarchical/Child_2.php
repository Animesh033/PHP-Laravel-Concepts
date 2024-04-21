<?php

namespace Interview\PHP\OOP\Inheritance\Hierarchical;


class Child_2 extends Parent_1
{
    function setVal($set_this)
    {
        $this->fist_name = $set_this . " - " . $set_this;;
    }
    function getVal()
    {
        echo $this->fist_name;
    }
}
