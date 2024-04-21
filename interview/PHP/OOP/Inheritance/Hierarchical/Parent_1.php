<?php

namespace Interview\PHP\OOP\Inheritance\Hierarchical;

class Parent_1
{
    var $var = "This is first var";
    public $fist_name;
    // simple class method
    function returnVar()
    {
        echo $this->fist_name;
    }
    function set_fist_name($set_this)
    {
        $this->fist_name = $set_this;
    }
}
