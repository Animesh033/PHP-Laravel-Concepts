<?php

/*
Inheritance Type	Support in PHP
1. Single Inheritance	YES
2. Multilevel Inheritance	YES
3. Hierarchical Inheritance	YES
4. Multiple Inheritance	NO
*/

namespace Interview\PHP\OOP\Inheritance;

use Interview\PHP\OOP\Inheritance\Single\Child_1 as SingleChild;

use Interview\PHP\OOP\Inheritance\Multilevel\Child_1 as MultilevelChild1;
use Interview\PHP\OOP\Inheritance\Multilevel\Child_2 as MultilevelChild2;

use Interview\PHP\OOP\Inheritance\Hierarchical\Child_1 as HierarchicalChild1;
use Interview\PHP\OOP\Inheritance\Hierarchical\Child_2 as HierarchicalChild2;


class InheritanceController
{

    public function explainSingleInheritanceExample()
    {

        $childOne = new SingleChild();

        $childOne->setFirstName("Animesh");

        $childOne->returnVar();
    }


    public function explainMultilevelInheritanceExample()
    {

        $childOne = new MultilevelChild1();
        $childOne->setVal("This is first inherited class");
        $childOne->getVal();
        echo "<br/><br/>";

        $childTwo = new MultilevelChild2();
        $childTwo->setVal("This is second inherited class");
        $childTwo->getVal();
    }


    public function explainHierarchicalInhritanceExample()
    {
        $childOne = new HierarchicalChild1();
        $childOne->setVal("This is first child class");
        $childOne->getVal();

        echo "<br/><br/>";
        $childTwo = new HierarchicalChild2();
        $childTwo->setVal("This is second child class");
        $childTwo->getVal();
    }
}


/*
$inheritanceObj = new Interview\PHP\OOP\Inheritance\InheritanceController();

$inheritanceObj->explainSingleInheritanceExample();

$inheritanceObj->explainMultilevelInheritanceExample();

$inheritanceObj->explainHierarchicalInhritanceExample();


*/
