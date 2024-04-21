<?php

class MethodA
{

    public function callA()
    {
        echo "callA is called!!!";
    }
}


$a = new MethodA();

$a->callA();
