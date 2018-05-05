<?php

include_once 'AbstractDuck.php';
include_once 'FlyWithWings.php';
include_once 'QuackConcrete.php';

class MallardDuck extends AbstractDuck {

    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new QuackConcrete();
    }

    public function display()
    {
        echo "I'm a real Mallard duck\n";
    }

}
