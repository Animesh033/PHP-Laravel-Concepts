<?php
class MyAccess
{
    var $var = "This is first var";
    protected $fist_name;
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
class child extends MyAccess
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
$obj1 = new child();
$obj1->setVal("Jai Shre");
$obj1->getVal();
